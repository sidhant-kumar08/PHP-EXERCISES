<?php
    //exercise 1

    $colors = ['Red', 'Green', 'Blue', 'Yellow', 'White'];
    print($colors[array_rand($colors)] . "\n");


    //exercise 2

    foreach($colors as $index => $color){
        print("Color $index = $color \n");
    }


    //exercise 3

    $removedItem = array_pop($colors);
    print($removedItem . " ");
    var_dump($removedItem);

?>

<?php

    //exercise 4

    $ages = [23,31,55];
    $items = count($ages);

    $total = array_sum($ages);

    $average = $total / $items;

    print("Number of items : $items, & Average : $average \n");
?>