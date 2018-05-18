<?php
// test d'affichage de message de retour sur input Pseudo
session_start();

setcookie('pseudo', 'loic');

if (isset($_COOKIE['pseudo'])) {

    echo $_COOKIE['pseudo'] . ' : existe bien !';
} else {
    "L'element n'existe pas";
}
?>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css"/>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!--Affichage d'une page de connexion bootstap-->
<div class="row pt-5">
    <div class="col-md-3 col-md-offset-3 connexion mt-5 mt-5" >
        <div class="well well-sm">
            <form class="form-control" action="http://arrayOPort.bwb/script/login.php" method="post">
                <form class="form-group"><br>
                    <fieldset>
                        <legend class="text-center"><b> Connexion</b></legend><br>
                        <input class="form-control"  type="text" name="Pseudo" placeholder="pseudo" /><br />
                        <input class="form-control"  type="password" name="Password" placeholder="password"/><br /><br />
                        <input type="submit" value="Connexion" class="btn btn-success btnmod">
                    </fieldset>
                </form>
        </div>
    </div>
</div>