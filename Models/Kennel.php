<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    public $weight;
    public $height;
    public $width;
    public $materials;

    public function set_kennel($weight, $height, $width, string $materials)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->materials = $materials;
    }
}
