<?php

/**
 * Class Product
 */
class Product {

    private $prize;

    public function __construct($prize)
    {
        $this->prize = $prize;
    }

    public function getPrice($value='')
    {
        return $this->prize;
    }
}
