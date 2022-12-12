<?php

class Food extends Product
{
    public $weight;
    public $ingredients;
    public $consistency;

    function __construct($weight, string $ingredients, string $consistency)
    {
        $this->weight = $weight;
        $this->$ingredients = $ingredients;
        $this->consistency = $consistency;
    }
}
