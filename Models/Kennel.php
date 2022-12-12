<?php

class Kennel extends Product
{
    public $weight;
    public $height;
    public $width;
    public $materials;

    function __construct($weight, $height, $width, string $materials)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->materials = $materials;
    }
}
