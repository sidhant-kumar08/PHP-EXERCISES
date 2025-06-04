<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>

    <a href="/public/index.php?action=login">login</a>
    <br>
    <a href="/public/index.php?action=logout">Logout</a>
    <br>
    <a href="/public/index.php?action=products">Products</a>
</body>
</html>

<?php
    require_once("../src/helperFunctions.php");


    $action = filter_input(INPUT_GET, 'action');

    if($action == 'login'){
        displayLoginPage();
    } else if($action == 'products'){
        if(isset($_SESSION['user'])){
            displayProductsPage();
        } else {
            header("Location: /public/index.php");
        }
    } else if($action == 'logout'){
        unset($_SESSION['user']);
        header("Location: index.php");
    }
?>