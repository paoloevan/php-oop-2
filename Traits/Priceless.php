<?php

trait Priceless
{
    public $price;

    public function getPriceByWeight(Float $price, Float $weight)
    {
        if ($price === 0 || $weight === 0) {
            throw new Exception('Price not found');
        } else {
            $priceWeight = number_format($price / $weight, 2);
            return $this->price = $priceWeight;
        }
    }
    // try {
    //     echo getPriceByWeight(0, 0);
    // } catch (Exception $e) {
    //     echo 'Price not found';
    // }

}
