<?php
require __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Priceless.php';

class Food extends Product
{
    public $ingredients;
    public $consistency;

    function __construct(int $id, $weight, Float $price, Category $category, string $image_path, string $ingredients, string $consistency)
    {
        parent::__construct($id, $weight, $price, $category, $image_path); //altrenative
        // $this->id_product = $id;
        // $this->price = $price;
        // $this->category = $category;
        // $this->image_path = $image_path;
        //$this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->consistency = $consistency;
    }

    use Priceless;
}
