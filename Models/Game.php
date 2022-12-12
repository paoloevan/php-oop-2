<?php
require_once __DIR__ . '/Product.php';

class Game extends Product
{
    public $weight;
    public $height;
    public $width;
    public $type;

    public function set_game($weight, $height, $width, string $type)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->type = $type;
    }
}
