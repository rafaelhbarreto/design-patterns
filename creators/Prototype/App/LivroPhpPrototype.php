<?php

namespace App; 

use App\Contracts\LivroPrototype; 

class LivroPhpPrototype extends LivroPrototype
{
    public function __construct()
    {
        $this->setAssunto('PHP');
    }

    public function __clone()
    {
        echo 'Livro PHP Clonado','<br>'; 
    }
}