<?php
$clientRealUsername = 'customer';
$clientRealPassword = 'paying';

$clientUsername = filter_input(INPUT_POST, 'clientUsername');
$clientPassword = filter_input(INPUT_POST, 'clientPassword');

if ($clientUsername == $clientRealUsername && $clientPassword == $clientRealPassword) {
    header("Location: /public/successClient.php");
} else {
    header("Location: /public/loginError.php");
}
