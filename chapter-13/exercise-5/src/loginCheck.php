<?php
    
    $clientRealUsername = 'customer';
    $clientRealPassword = 'paying';

    $staffRealUsername = 'author';
    $staffRealPassword = 'words';

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $staffBtn = filter_has_var(INPUT_POST, 'staff-btn');
    $clientBtn = filter_has_var(INPUT_POST, 'client-btn');


    if($clientBtn == true){
        if($username == $clientRealUsername && $password == $clientRealPassword){
        header("Location: /public/successClient.php");
        } else {
            header("Location: /public/loginError.php");
        }
    } else if ($staffBtn == true){
        if ($username == $staffRealUsername && $password == $staffRealPassword){
        header("Location: /public/successStaff.php");
        } else {
            header("Location: /public/loginError.php");
        }
    } else {
        header("Location: /public/loginError.php");
    }
    
?>