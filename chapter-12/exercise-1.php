<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//sticky form
    $age = filter_input(INPUT_POST, 'age');

?>
    <form action="" method="post">
        <input type="number" placeholder="Enter age" name="age" value='<?=$age?>'>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

