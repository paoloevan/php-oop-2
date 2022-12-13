<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Priceless.php';

class Game extends Product
{
    public $height;
    public $width;
    public $type;

    function __construct(int $id, $weight, Float $price, Category $category, string $image_path, $height, $width, string $type)
    {
        parent::__construct($id, $weight, $price, $category, $image_path);
        $this->height = $height;
        $this->width = $width;
        $this->type = $type;
    }

    use Priceless;
}
