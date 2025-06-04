<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        $email = filter_input(INPUT_POST, "email");

    ?>
    <form action="" method="post">
        <input type="text" name="email">
        <input type="submit">
    </form>

    <?php
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Email is invalid";
            print($error);
        } else {
            print("valid email");
        }
    ?>



</body>

</html>