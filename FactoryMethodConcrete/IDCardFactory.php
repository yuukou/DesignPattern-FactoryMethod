<?php

namespace FactoryMethodConcrete;

use FactoryMethod\Factory;
use FactoryMethod\Product;

class IDCardFactory extends Factory
{
    private $owners = array();

    protected function createProduct($owner)
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product)
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners()
    {
        return $this->owners;
    }
}
