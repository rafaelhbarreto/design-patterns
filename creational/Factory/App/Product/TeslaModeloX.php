<?php 

namespace App\Product; 

use App\Product\CarroProduct;

class TeslaModeloX implements CarroProduct
{
    public function acelerar()
    {
        echo 'Acelerando Tesla Modelo X', '<br>'; 
    }
    
    public function frear()
    {
        echo 'Freando Tesla Modelo X', '<br>'; 
    }
    
    public function trocarMarcha()
    {
        echo 'Trocando marcha do Tesla Modelo X', '<br>'; 
    }
}