<?php
require_once __DIR__ . '/Category.php';

class Product
{
    public $id_product;
    public $weight;
    public $price;
    public $category;
    public $image_path;

    function __construct(int $id, $weight, $price, Category $category, string $image_path)
    {
        $this->id_product = $id;
        $this->price = $price;
        $this->category = $category;
        $this->image_path = $image_path;
        $this->weight = $weight;
    }
}
