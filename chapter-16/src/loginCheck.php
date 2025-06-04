<?php
    require_once("../src/helperFunctions.php");


    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');


    $user = ['username' => 'henry', 'password' => 'henry123', 'role' => 'admin'];

    if($user['username'] = $username && $user['password'] == $password){
        $_SESSION['user'] = $user;
        header("Location: /public/LoginSuccess.php");
    } else {
        header("Location: /public/loginError.php");
    }
    

?>