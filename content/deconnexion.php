<?php
//deconnexion/destruction de la variable $_SESSION active
session_destroy();
header('Location: http://arrayOPort.bwb/?page=connexion.php');
exit();
?>

