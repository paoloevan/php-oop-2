<?php

class Product
{
    public $id_product;
    public $price;
    public $category;

    function __construct($id, $price, $category)
    {
        $this->id_product = $id;
        $this->price = $price;
        $this->category = $category;
    }
}
