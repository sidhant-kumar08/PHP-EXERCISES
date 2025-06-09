<?php

    use Mattsmithdev\Product;

    require_once __DIR__ . '/../vendor/autoload.php';


    $p1 = new Product();
    $p1->setId(7);
    $p1->setDescription("hammer");
    $p1->setPrice(9.99);


    var_dump($p1);