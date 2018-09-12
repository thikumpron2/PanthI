<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "panthai";
$link =  mysqli_connect($host,$username,$password,$db_name) or die(mysqli_connect_error());
$link ->set_charset("utf8");
    ?>
