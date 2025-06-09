<?php
require __DIR__ .  '/../vendor/autoload.php';

use Mattsmithdev\Dessert;
use Mattsmithdev\DietType;

$obj1 = new Dessert();
$obj1->setName('Eton Mess ');
$obj1->setDiet(DietType::VEGETARIAN);

print $obj1;
