<?php

include('App\FogueteProduct.php');
include('App\FabricaFoguetesDirector.php');
include('App\FogueteBuilder.php');
include('App\FogueteModeloIBuilder.php');
include('App\FogueteModeloIIBuilder.php');

use App\FabricaFoguetesDirector;
use App\FogueteModeloIBuilder;
use App\FogueteModeloIIBuilder;

$montadoraDeFoguetesTestI = new FabricaFoguetesDirector(new FogueteModeloIBuilder());
$montadoraDeFoguetesTestI->construirFoguete();
echo $montadoraDeFoguetesTestI->getFoguete();


$montadoraDeFoguetesTestII = new FabricaFoguetesDirector(new FogueteModeloIIBuilder());
$montadoraDeFoguetesTestII->construirFoguete();
echo $montadoraDeFoguetesTestII->getFoguete();

