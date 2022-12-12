<?php

class Game extends Product
{
    public $weight;
    public $height;
    public $width;
    public $type;

    function __construct($weight, $height, $width, string $type)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->type = $type;
    }
}
