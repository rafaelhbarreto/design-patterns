<?php 

namespace App\Product; 

use App\Product\CarroProduct;

class DodgeDart implements CarroProduct
{
    public function acelerar()
    {
        echo 'Acelerando DodgeDart', '<br>'; 
    }
    
    public function frear()
    {
        echo 'Freando DodgeDart', '<br>'; 
    }
    
    public function trocarMarcha()
    {
        echo 'Trocando marcha do DodgeDart', '<br>'; 
    }
}