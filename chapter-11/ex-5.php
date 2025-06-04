<?php
    $answer = filter_input(INPUT_GET, 'carOption', options: FILTER_REQUIRE_ARRAY);
    $newAnswer = implode(" & ",$answer);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Confirm ?
    <br>
    <?=print($newAnswer)?>
</body>
</html>