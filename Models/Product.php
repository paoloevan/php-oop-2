<?php
require_once __DIR__ . '/Category.php';
include __DIR__ . '/Food.php';

class Product
{
    public $id_product;
    public $price;
    public $category;
    public $image_path;

    function __construct(int $id,  $price, Category $category, string $image_path)
    {
        $this->id_product = $id;
        $this->price = $price;
        $this->category = $category;
        $this->image_path = $image_path;
    }
}
