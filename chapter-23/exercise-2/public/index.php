<?php
    require_once __DIR__ . "/../src/Application.php";


try{
    $obj1 = new Application();
    $obj1->run();
    
} catch (\Exception $e){
    print("Error : ". $e);
}