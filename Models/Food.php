<?php

class Food extends Product
{
    public $weight;
    public $ingredients;
    public $consistency;

    function __construct($weight, $ingredients, $consistency)
    {
        $this->weight = $weight;
        $this->$ingredients = $ingredients;
        $this->consistency = $consistency;
    }
}
