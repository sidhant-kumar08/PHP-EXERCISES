<?php

namespace Mattsmithdev;

class Car
{
    private string $make = 'Ford';
    private string $model;
    private float $price;

    private static float $totalPrice = 0;
    private static int $numInstances = 0;

    public static function averagePrice()
    {
        return self::$totalPrice / self::$numInstances;
    }

    public function __construct(string $make, string $model, float $price)
    {
        $this->make = $make;
        $this->model = $model;
        $this->price = $price;

        self::$totalPrice += $price;
        self::$numInstances++;
    }
}



$car1 = new Car("Mustang", "2003", 120000);
$car2 = new Car("BMW", "2012", 190000);

$avgPrice = Car::averagePrice();
print($avgPrice);
