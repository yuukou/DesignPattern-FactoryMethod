<?php

namespace FactoryMethodConcrete;

use FactoryMethod\Product;

class IDCard extends Product
{
    private $owner;

    public function __construct($owner)
    {
        echo $owner . 'のカードを作ります。' . "\n";
        $this->owner = $owner;
    }

    public function useSomething()
    {
        echo $this->owner . 'のカードを使います。' . "\n";
    }

    public function getOwner()
    {
        return $this->owner;
    }
}
