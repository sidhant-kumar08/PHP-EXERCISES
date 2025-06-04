<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $error = '';
    $age = filter_input(INPUT_POST, 'age');

    ?>
    <form action="" method="post">
        <input type="text" placeholder="Enter age" name="age" value='<?= $age ?>'>
        <input type="submit" value="Submit">
    </form>

    <?php
        if(!is_numeric($age)){
        $error = "A non numeric value found";
        }

        print($error);
    ?>
</body>

</html>