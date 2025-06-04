<?php
    function displayLoginPage(){
        require_once("../templates/loginForm.php");
    }

    function displayProductsPage(){
        require_once("../templates/productsPage.php");
    }


    // function existingUserCheck($array, $user){
    //     foreach($array as $item){
    //         if($item['username'] == $user){
    //             return true;
    //         }
    //     }

    //     return false;
    // }
?>