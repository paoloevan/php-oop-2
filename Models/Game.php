<?php
require_once __DIR__ . '/Product.php';

class Game extends Product
{
    public $height;
    public $width;
    public $type;

    public function set_game($height, $width, string $type)
    {
        $this->height = $height;
        $this->width = $width;
        $this->type = $type;
    }
}
