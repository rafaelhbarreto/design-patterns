<?php 

namespace App\Product; 

use App\Product\CarroProduct;

class DodgeCharger implements CarroProduct
{
    public function acelerar()
    {
        echo 'Acelerando DodgeCharger', '<br>'; 
    }
    
    public function frear()
    {
        echo 'Freando DodgeCharger', '<br>'; 
    }
    
    public function trocarMarcha()
    {
        echo 'Trocando marcha do DodgeCharger', '<br>'; 
    }
}