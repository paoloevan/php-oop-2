<?php

$products = [
    'kennel_cat' => [
        'id' => 123,
        'price' => 101,
        'category_name' => 'cat',
        'image' => 'https://cdn.manomano.com/images/images_products/25102394/P/56504863_1.jpg',
        'weight' => 12, 5,
        'height' => 5,
        'width' => 2,
        'materials' => 'plastic'
    ],
    'toy_dog' => [
        'id' => 321,
        'price' => 11,
        'category_name' => 'dog',
        'image' => 'https://m.media-amazon.com/images/I/41rNtCvRruL._AC_.jpg',
        'weight' => 1, 5,
        'height' => 51,
        'width' => 21,
        'type' => 'garden'
    ],
    'food_cat' => [
        'id' => 123,
        'price' => 101,
        'category_name' => 'cat',
        'image' => 'https://tikipets.com/wp-content/themes/tikipets/img/slide-cat-pukapuka.png',
        'weight' => 12, 5,
        'ingredients' => 'fish',
        'consistency' => 'wet'
    ],
];

require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Game.php';
require_once __DIR__ . '/../Models/Kennel.php';
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../database/db.php';

$kennel_cat = new Kennel($products['kennel_cat']['id'], $products['kennel_cat']['weight'], $products['kennel_cat']['price'], new Category($products['kennel_cat']['category_name']), $products['kennel_cat']['image']);
$kennel_cat->set_kennel($products['kennel_cat']['weight'], $products['kennel_cat']['height'], $products['kennel_cat']['width'], $products['kennel_cat']['materials']);

$toy_dog = new Game($products['toy_dog']['id'],  $products['toy_dog']['weight'], $products['toy_dog']['price'], new Category($products['toy_dog']['category_name']), $products['toy_dog']['image']);
$toy_dog->set_game($products['toy_dog']['weight'], $products['toy_dog']['height'], $products['toy_dog']['width'], $products['toy_dog']['type']);

$food_cat = new Food($products['food_cat']['id'],  $products['food_cat']['weight'], $products['food_cat']['price'], new Category($products['food_cat']['category_name']), $products['food_cat']['image']);
$food_cat->set_food($products['food_cat']['weight'], $products['food_cat']['ingredients'], $products['food_cat']['consistency']);

$new_products = [];
array_push($new_products, $kennel_cat, $toy_dog, $food_cat);
var_dump($new_products[0]->category);
