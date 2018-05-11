<?php
session_start();


session_destroy();
header('Location: http://php-decouverte.bwb/?page=connexion.php');
exit();
?>

<h1>Connexion</h1>
<div class="container">
    <form method="POST" action="template/script.php">
        <input type="text" name="pseudo" placeholder="pseudo" /><br />
        <input type="password" name="password" placeholder="password"/><br />
        <input type="submit" value="Connexion" class="btn btn-success">
    </form>
</div>
