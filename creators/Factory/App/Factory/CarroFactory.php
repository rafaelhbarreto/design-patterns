<?php 

namespace App\Factory; 
use App\Product\CarroProduct; 

interface CarroFactory 
{
    public function criarCarro(string $modeloCarro): CarroProduct;
}