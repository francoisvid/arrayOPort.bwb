<?php

/**
 * ce fichier va nous permettre d'initialiser nos données en créant la DB et les tables qui vont avec
 * Pour ce faire, les requettes sont enregistrées dans un fichier dédié nommé : database.sql
 */

/**
 * On récupere le contenu du fichier sous forme de chaine de caractere
 */
$sql = file_get_contents("../db/database.sql");

$dbh = new PDO('mysql:host=localhost;', "francois", "root");

$dbh->exec($sql);
echo $sql;