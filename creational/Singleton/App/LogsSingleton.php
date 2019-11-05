<?php 

namespace App; 

class LogsSingleton
{
    protected static $instancia; 

    private function __construct(){}
    private function __clone() {}
    private function __wakeUp() {}

    public static function obterInstancia(): self
    {
        if(empty(self::$instancia)) {
            self::$instancia = new self(); 
        }   

        return self::$instancia; 
    }

    public function gravarLog(array $data) 
    {
        $nomeDoArquivo = 'log.txt'; 

        $logAnteriores = []; 
        if(filesize($nomeDoArquivo) > 0 ) {
            $conteudoDoArquivo = file_get_contents($nomeDoArquivo);

            $logAnteriores = json_decode($conteudoDoArquivo, true); 
        }

        $logAnteriores[] = $data; 
        $arquivo = fopen($nomeDoArquivo, 'w');
        fwrite($arquivo, json_encode($logAnteriores));
        fclose($arquivo); 
    }
}