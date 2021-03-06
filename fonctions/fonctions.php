<?php

// crée un message et le stocke dans le fichier json
function createMessage() {
    $url = $_SERVER['DOCUMENT_ROOT'] . "/data/message.json";

    $messages = file_get_contents($url);

    $listeDeMessages = json_decode($messages, true);
    var_dump($listeDeMessages);

    $newMessage = array(
        "Nom" => $_POST['Nom'],
        "Prenom" => $_POST['Prenom'],
        "email" => $_POST['email'],
        "message" => $_POST['message'],
    );


    array_push($listeDeMessages, $newMessage);
    $messages = json_encode($listeDeMessages);
    file_put_contents($url, $messages);
//    var_dump($_SERVER['DOCUMENT_ROOT']);

    header('Location: http://arrayoport.bwb/?page=livreDor.php');
}

// retourne une liste de message en tableau associatif
function getMessages() {
    $url = $_SERVER['DOCUMENT_ROOT'] . "/data/message/message.json";
    $messages = file_get_contents($url);
    $listeDeMessages = json_decode($messages, true);
    
    return $listeDeMessages;
}

// Connexion d'un utilisateur
function login(){
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

}

// Inscription d'un utilisateur 
function inscriptionJSON(){

$url = $_SERVER['DOCUMENT_ROOT'] . "/data/users.json";
$users = file_get_contents($url);
$listeUsers = json_decode($users, true);

$newUser = array(
    "Pseudo" => $_POST['Pseudo'],
    "Password" => $_POST['Password'],
);

array_push($listeUsers, $newUser);
$usersJSON = json_encode($listeUsers);
file_put_contents($url, $usersJSON);

header('Location: http://arrayoport.bwb/?page=connexion.php');
}
