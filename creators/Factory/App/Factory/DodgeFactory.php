<?php 

namespace App\Factory; 

use App\Product\{
    CarroProduct, DodgeCharger, DodgeDart
};

class DodgeFactory implements CarroFactory 
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if($modeloCarro == 'dodge') {
            return new DodgeCharger(); 
        } else if ($modeloCarro == 'dart') {
            return new DodgeDart();
        } else {
            throw new \Exception("Modelo de carro não existe no sistema"); 
        }
    }
}
