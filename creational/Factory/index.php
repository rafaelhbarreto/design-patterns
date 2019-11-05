<?php

include('App\Product\CarroProduct.php');
include('App\Product\DodgeCharger.php');
include('App\Product\DodgeDart.php');
include('App\Product\TeslaModeloS.php');
include('App\Product\TeslaModeloX.php');
include('App\Factory\CarroFactory.php');
include('App\Factory\DodgeFactory.php');
include('App\Factory\TeslaFactory.php');

try {
    $teslaFactory = new App\Factory\TeslaFactory(); 
    $teslaModeloX = $teslaFactory->criarCarro('modelo_x'); 
    $teslaModeloX->acelerar(); 

} catch( Exception $e) {
    echo $e->getMessage();
}
