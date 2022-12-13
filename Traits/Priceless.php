<?php

trait Priceless
{
    public $price;

    public function getPriceByWeight(Float $price, Float $weight)
    {
        $priceWeight = number_format($price / $weight, 2);
        return $this->price = $priceWeight;
    }
}
