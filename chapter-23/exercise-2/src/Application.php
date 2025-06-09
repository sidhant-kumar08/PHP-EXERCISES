<?php

require_once __DIR__ . "/../src/Product.php";


class Application
{
    public function run(): void
    {

        try {
            $product1 = new Product("Soap", 1000);
        } catch (InvalidArgumentException $e) {
            print "Error occurred while initializing the product values, plz provide valid input";
        }
    }
}
