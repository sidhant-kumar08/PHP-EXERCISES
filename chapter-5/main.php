<?php
    //exercise 1
    print('123');
    require_once(__DIR__ . '/file2.php');
    print('789');
?>


<?php
    //exercise 2
    require_once(__DIR__ . "/exercise-2.php");

    $result1 = which_is_larger(4,5);
    print($result1 . "\n");
    $result2 = which_is_larger(21,19);
    print($result2 . "\n");
    $result3 = which_is_larger(3,3);

    //will print the first argument if both are same
    print($result3 . "\n");

?>


<?php
    //exercise 3

    function which_is_larger_modified(int|float $n1, int|float $n2): int|float|NULL{
        if($n1 > $n2){
            return $n1;
        } else if($n1 < $n2){
            return $n2;
        } else {
            return NULL;
        }
    } 



    print(which_is_larger_modified(2,2));
?>