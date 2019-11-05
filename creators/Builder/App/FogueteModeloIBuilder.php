<?php

namespace App; 

class FogueteModeloIBuilder extends FogueteBuilder
{
    public function buildTanqueCombustivel()
    {
        $this->foguete->setLitrosCombustivel(1000);
    }

    public function buildModelo()
    {
        $this->foguete->setModelo('Foguete modelo I');
    }

    public function buildMotores()
    {
        $this->foguete->setNumeroMotores(2);
    }

    public function buildNumeroLugares()
    {
        $this->foguete->setNumeroLugares(8); 
    }
}