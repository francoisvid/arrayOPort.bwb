<?php
/**
 * Couche d'acces aux données pour la table des plats
 * Liste des fonctions du CRUD
 */

function get_plats(){

    // création d'une connexion a la bdd
    $dbh = new PDO('mysql:host=localhost;dbname=test', "root", "");
// requete SQL (corps de la requete du point de vue metier)
    $request = "SELECT * FROM plats";
// execution de la requete
    $statement = $dbh->query($request);
// recuperation du resultat de la requete
    $plats = $statement->fetchAll();
// retourne la liste des plats sous forme de tableau associatif
    return $plats);
}




