<?php
    //exercise 1
    $name = "Sidhant";


    if(strlen($name) < 4){
        print("That is a short name\n");
    } else {
        print($name . "\n");
    }
?>

<?php
    //exercise 2

    $laundryWeightKg = 6;

    if($laundryWeightKg < 9){
        print("Fits in standard machine\n");
    } else {
        print("Needs medium to large machine\n");
    }

?>

<?php
    //exercise 3
    $vehicle = 'bus';

    switch($vehicle){
        case "bus":
            print("Beep beep");
            break;
        case "train":
            print("Runs on track");
            break;
        case "car":
            print("Has at least three wheels");
            break;
        case "helicopter":
            print("Can fly");
            break;
        case "bicycle":
            print("You never forget once you've learned");
            break;
        default :
            print("You've chosen the road less travel");
    }
?>


<?php
    //exercise 4
    $userNameCorrect = true;
    $passwordCorrect = true;

    if($userNameCorrect === true && $passwordCorrect === true){
        print("You are now logged in\n");
    } else {
        print("Invalid credentials, please try again\n");
    }

?>