<?php
    session_start();

    if(!isset($_SESSION['guess'])){
        $_SESSION['guess'] = 0;
        print 'no previous value found';
    } else {
        $randNum = rand(1,10);
        $_SESSION['guess']+= $randNum;
        print($_SESSION['guess']);
    }
?>