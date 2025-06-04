<?php
    $userPassword = filter_input(INPUT_POST, 'password');
    $userUsername = filter_input(INPUT_POST, 'username');

    $realPassword = 'words';
    $realUsername = 'author';

    if($userUsername == $realUsername && $userPassword == $realPassword){
        header("Location: /public/successStaff.php");
    } else {
        header("Location: /public/loginError.php");
    }

?>