<?php
    require_once("./class.php");

    $cat1 = new Cat("MR. Fluffy", "long-haired mix", 2);

    print($cat1->name . "\n");
    print($cat1->breed . "\n");
    print($cat1->age . "\n");
?>