<?php

trait Priceless
{
    public $price;

    public function getPriceByWeight(Float $price, Float $weight)
    {
        try {
            if ($price == 0 || $weight == 0) {
                throw new Exception('Price not found');
            }
            $priceWeight = number_format($price / $weight, 2);
            return $this->price = $priceWeight;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
