<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Priceless.php';

class Kennel extends Product
{
    public $height;
    public $width;
    public $materials;

    function __construct(int $id, $weight, Float $price, Category $category, string $image_path, $height, $width, string $materials)
    {
        parent::__construct($id, $weight, $price, $category, $image_path);
        $this->height = $height;
        $this->width = $width;
        $this->materials = $materials;
    }

    use Priceless;
}
