<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" placeholder="Enter a number" name='number' >
        <input type="submit" value="Submit" name="submit" >
        <input type="submit" value="Display" name='submit2' >
    </form>
</body>
</html>


<?php
    session_start();

    
    $number = filter_input(INPUT_POST, 'number');
    $btn1 = filter_has_var(INPUT_POST, 'submit');
    $btn2 = filter_has_var(INPUT_POST, 'submit2');

    if($btn1){
        if(isset($_SESSION['number'])){
            $_SESSION['number'] = $number;
        } else {
            $_SESSION['number'] = $number;
        }
    } else if ($btn2){
            if(isset($_SESSION['number'])){
                print($_SESSION['number']);
            } else {
                print("No value was found in the session");
            }
    }
?>