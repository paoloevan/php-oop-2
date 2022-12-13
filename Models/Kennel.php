<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    public $height;
    public $width;
    public $materials;

    public function set_kennel($height, $width, string $materials)
    {
        $this->height = $height;
        $this->width = $width;
        $this->materials = $materials;
    }
}
