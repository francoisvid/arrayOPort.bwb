<?php

// création d'une connexion a la bdd
$dbh = new PDO('mysql:host=localhost;dbname=test', "root", "");
print_r($dbh);
print_r("\n");
// requete SQL (corps de la requete du point de vue metier)
$request = "SELECT * FROM eleve";
print_r($request);
// execution de la requete
$statement = $dbh->query($request);
print_r($statement);
// recuperation du resultat de la requete
$eleves = $statement->fetchAll();
print_r($eleves);

include '../dao/plats.php';
var_dump(get_plats());

