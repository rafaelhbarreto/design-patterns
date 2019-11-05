<?php 

namespace App\Product; 

use App\Product\CarroProduct;

class TeslaModeloS implements CarroProduct
{
    public function acelerar()
    {
        echo 'Acelerando Tesla Modelo S', '<br>'; 
    }
    
    public function frear()
    {
        echo 'Freando Tesla Modelo S', '<br>'; 
    }
    
    public function trocarMarcha()
    {
        echo 'Trocando marcha do Tesla Modelo S', '<br>'; 
    }
}