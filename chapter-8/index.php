<?php
    //exercise 1
    $items = ["Fred" => 1.82, "Joelle" => 1.55, "Robin" => 1.70];

    foreach($items as $key => $item){
        print("$key => $item \n");
    }
?>


<?php
    //exercise 2
    $newArray = ["Back to the Future" => ["duraton" => 116, "leadingActor" => "Michael J. Fox"], "The Fifth Element" => ["duration" => 126, "leadingActor" => "Bruce Willis"], "Alien" => ["duration" => 117, "leadingActor" => "Sigourney Weaver"]];

    print_r($newArray);
?>

<?php
    //exercise 3
    $array1 = [1,3,5,7,9];
    $array2 = [2,4,6,8];

    $array3 = [...$array1, ...$array2];
    sort($array3);
    print_r($array3);
?>