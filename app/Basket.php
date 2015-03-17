<?php

/**
 * Class Basket
 */
class Basket {

    private $product;

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function price()
    {
        $price = 0;

        foreach ($this->products as $product) {
            $price = $product->getPrice();
        }

        return $price;
    }
}
