<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Success</h1>
    <a href='/public/index.php?action=products'>Products</a>
</body>
</html>


<?php
    print_r($_SESSION['user']);
?>