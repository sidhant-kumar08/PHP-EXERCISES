<?php

namespace Mattsmithdev;


class Car
{
    private string $make = 'Ford';
    private string $model;
    private float $price;

    private static float $totalPrice = 0;
    private static int $numInstances = 0;

    public function __construct(string $make, string $model, float $price)
    {
        $this->make = $make;
        $this->model = $model;
        $this->price = $price;

        self::$numInstances++;
        self::$totalPrice += $price;
    }


}



$car1 = new Car("BMW", "2015", 12);