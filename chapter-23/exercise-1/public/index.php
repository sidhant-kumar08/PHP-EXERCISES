<?php
    require_once __DIR__ . "/../src/Product.php";


try{
    $product1 = new Product("soap", 100000);
    print($product1->getName() ."\n");
    print($product1->getPrice() . "\n");
} catch (\Exception $e){
    print("Error : ". $e);
} finally {
    print("This will always run\n");
}