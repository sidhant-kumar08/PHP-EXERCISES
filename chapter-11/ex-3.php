<?php
    $age = filter_input(INPUT_POST, 'age');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>You'll be <?=$age = $age+1?> Years old on your next birthday.</p>
</body>
</html>