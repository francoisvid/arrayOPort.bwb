<link href="../css/stylesheet.css" rel="stylesheet" type="text/css"/>
<?php
$_POST['nom'];
$_POST['prenom'];
$_POST['message'];
$_POST['mail'];

$date = date("d.m.Y");
$heure = date("H:i");
?>



<?php
//verifie si l'utilisateur et bien inscrit, si oui propose de poster un com
if (($_SESSION['pseudo'] === "admin" && ($_SESSION['password'] === "admin"))) {
    ?>
    <div class="container">
        <h1>Bienvenue <?php echo $_SESSION['pseudo'] ?> sur le livre d'Or</h1>
        <form  method="POST">
            <p>Nom : </p><input type="text" name="nom" placeholder="Nom"><br><br>
            <p>Prenom : </p><input type="text" name="prenom" placeholder="Prenom"><br><br>
            <p>Adresse mail : </p><input type="text" name="mail" placeholder="Adresse mail"><br><br>
            <textarea name="message" rows="6" cols="45" placeholder="Veuillez laisser votre commentaire"></textarea><br><br>
            <input type="submit" value="Envoyer" class="btn btn-success"><br><br>
        </form>
    </div>
    <?php
    //sinon, propose de s'inscrire
} else {
    ?>
    <h1>Inscrivez-vous</h1>
    <div class="container">
        <form method="POST">
            <input type="text" name="pseudo" placeholder="pseudo" /><br />
            <input type="password" name="password" placeholder="password"/><br />
            <input type="submit" value="Inscription" class="btn btn-success">
        </form>
    </div>
    <?php
}
//container qui contient les messages postés
?>
<div class="reponse col-md-6">
    <ul>
<?php
if (isset($_POST) && !empty($_POST)) {
    echo "dernier message posté le : $date à : $heure"?><br><br><?php
            foreach ($_POST as $key => $val) {
                if (!isset($_SESSION['pseudo']))
                    $_SESSION['password'] = array();
                // Si le panier n'existe pas on le créer
                $key = str_replace('_', ' ', $key);
                echo $key . " : " . $val . "</br>";
                $_SESSION['panier_test'][] = array($key, $val);
            }
        }
        else {
            echo "Aucuns nouveaux messages postés.";
        }
        echo "<br><br>Tous les messages :<br><br>";
        foreach ($_SESSION['panier_test'] as $val) {
            $val = str_replace('_', ' ', $val);
            echo $val[0] . " : " . $val[1] . "<br>";
        }
        ?>
    </ul>
</div>

