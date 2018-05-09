<?php

session_start();

include 'template/header.php';
include 'template/navigation.php';
include 'template/content.php';
include 'template/footer.php';


$_SESSION['pseudo'] = "admin";
$_SESSION['password'] = "admin";
//$_SESSION['time']     = time()


?>

