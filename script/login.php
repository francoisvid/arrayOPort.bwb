<?php
session_start();

$url = $_SERVER['DOCUMENT_ROOT'] . "/data/users.json";
$users = file_get_contents($url);
$listeUsers = json_decode($users, true);



if ($_POST['Pseudo'] !== "") {
    foreach ($listeUsers as $element) {
        if ($_POST['Pseudo'] === $element['Pseudo'] && $_POST['Password'] === $element['Password']) {
            $_SESSION['Pseudo'] = $element['Pseudo'];            
            header('Location: http://arrayOPort.bwb/?page=livreDor.php');
            exit;
        }
    }
}else{
    echo "Le champ est vide";
}
    header('Location: http://arrayOPort.bwb/?page=inscription.php');
exit;

?>
