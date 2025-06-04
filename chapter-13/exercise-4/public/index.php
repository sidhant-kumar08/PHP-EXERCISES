<?php
        require_once "../src/controllerFunctions.php";


    $action = filter_input(INPUT_GET, 'action');

    if($action == 'home'){
        displayHome();
    } else if($action == 'loginStaff'){
        displayStaff();
    } else if($action == 'loginClient'){
        displayClient();
    }

    require_once "../templates/home.php"
?>