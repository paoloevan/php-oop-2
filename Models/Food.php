<?php
require __DIR__ . '/Product.php';

class Food extends Product
{
    public $ingredients;
    public $consistency;

    function __construct(string $ingredients, string $consistency)
    {
        $this->$ingredients = $ingredients;
        $this->consistency = $consistency;
    }

    public function set_food(string $ingredients, string $consistency)
    {
        $this->$ingredients = $ingredients;
        $this->consistency = $consistency;
    }
}
