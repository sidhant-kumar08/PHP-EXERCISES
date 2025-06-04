<?php
    require_once "../src/controllerFunctions.php";
    $action = filter_input(INPUT_GET, 'action');

    if($action == 'home'){
        displayHome();
    } else if($action == 'about'){
        displayAbout();
    } else if($action == 'contact'){
        displayContact();
    } else if($action == 'recommendations'){
        displayRecommendations();
    } else {
        echo "Hello";
    }

?>