<?php

namespace App; 

class FogueteModeloIIBuilder extends FogueteBuilder
{
    public function buildTanqueCombustivel()
    {
        $this->foguete->setLitrosCombustivel(1000);
    }

    public function buildModelo()
    {
        $this->foguete->setModelo('Foguete modelo II');
    }

    public function buildMotores()
    {
        $this->foguete->setNumeroMotores(3);
    }

    public function buildNumeroLugares()
    {
        $this->foguete->setNumeroLugares(6); 
    }
}