<?php
    //exercise 1
    $name = 'Sidhant';

    print($name . " is learning PHP");
?>


<?php
//exercise 2
    $fruit = 'apple';

    print("$fruit juice is made from {$fruit}s\n");
    $fruit = 'orange';
    print("$fruit juice is made from {$fruit}s\n");
    
?>

<?php
    //exercise 3
    $smiley = "\u{1F60A}";
    $happyMessage = <<<EOT
    PHP is fun
    $smiley
    $smiley

    EOT;

    print($happyMessage);

?>


<?php
    $appleJuice = 'apple juice is made from apples.';
    $grapefruitjuice = str_replace("apple", "grapfruit", $appleJuice);
    $grapefruitjuice = ucfirst($grapefruitjuice);

    print($grapefruitjuice);
?>