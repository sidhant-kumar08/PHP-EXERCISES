<?php
    $answer = filter_input(INPUT_POST, "carType");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      if($answer == 'Yes'){
        echo "<p>You can buy an electric car</p>";
      } else {
        echo "<p>You can buy a bmw gas car</p>";
      }
    ?>
</body>
</html>