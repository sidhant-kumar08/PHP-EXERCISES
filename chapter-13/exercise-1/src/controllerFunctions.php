<?php
    function displayHome(){
        include("../templates/home.php");
    }

    function displayAbout(){
        require_once('../templates/about.php');
    }

    function displayContact(){
        require_once('../templates/contact.php');
    }

    function displayRecommendations(){
        require_once('../templates/recommendations.php');
    }
?>