<?php
     session_start();

     if($_SESSION['user']['role'] != 'admin'){
        header("Location: /public/errorPage.php");
     }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products Page</h1>
</body>
</html>