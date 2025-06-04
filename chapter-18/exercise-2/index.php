<?php

    require_once("./class.php");

    $pet1 = new Pet();

    $pet1->setName("Fifi");
    $name = $pet1->getName();
    print($name);
?>