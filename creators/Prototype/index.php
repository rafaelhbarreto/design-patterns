<?php

include('App/Contratcts/LivroPrototype.php');
include('App/LivroPhpPrototype.php');

use App\LivroPhpPrototype; 

$compradores = ['Rafael Barreto', 'Lídia Rodrigues', 'Augusto Cézar']; 

$livroPhp = new LivroPhpPrototype();
$livroPhp->setTitulo('Padrões de Projeto com PHP 7.2'); 

$livros = []; 
foreach($compradores as $nomeComprador) {
    $livroComprador = clone $livroPhp; 
    $livroComprador->setNomeTitular($nomeComprador);

    array_push($livros, $livroComprador); 
}

echo '<pre>';
    print_r($livros); 
echo '</pre>';