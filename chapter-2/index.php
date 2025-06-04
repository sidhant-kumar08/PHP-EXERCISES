<?php
    //exercise 1
    $scoreFloat = 55.9;
    $scoreInt = (int)$scoreFloat;
    print(gettype($scoreFloat) ." scoreFloat = $scoreFloat\n");
    print(gettype($scoreInt) ." scoreInt = $scoreInt\n");
?>

<?php
    //exercise 2
    $age = 21;
    var_dump($age);

    $age = NULL;
    var_dump($age);

    unset($age);
    var_dump($age);


?>