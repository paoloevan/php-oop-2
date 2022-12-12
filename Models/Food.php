<?php
require __DIR__ . '/Product.php';

class Food extends Product
{
    public $weight;
    public $ingredients;
    public $consistency;

    public function set_food($weight, string $ingredients, string $consistency)
    {
        $this->weight = $weight;
        $this->$ingredients = $ingredients;
        $this->consistency = $consistency;
    }
}
