<nav class="d-flex flex-nowrap navbar navbar-expand-md navbar-dark fixed-top bg-dark opaque-navbar" style="position: fixed;">
    <a class="navbar-brand" href="#">Resto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">


            <?php
            $path = "/home/francois/ServeurWeb/php-decouverte.bwb/content";

            $dossier = opendir($path);

            while (false !== ($entry = readdir($dossier))) {
                if ($entry !== "." && $entry !== ".." && $entry !== "connexion.php" && $entry !== "deconnexion.php") {
                    $name = basename($entry, ".php");
                    if ($entry == $_GET['page']) {          
                    }
                    if ($entry == "Accueil.php") {
                        ?><li class="nav-item "><a class="nav-link" href="/"><?= $name ?></a></li><?php
                    } else {
                        ?><li><a  class="nav-link nav-item order-3 <?php $class ?>" href="/?page=<?= $entry ?>"><?= $name ?></a></li><?php
                        }
                    }
                }
                ?>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Rechercher..." aria-label="Search">
            <input type="submit" value="Connexion"  formaction="./content/connexion.php" class="btn btn-outline-success my-2 my-sm-0">&nbsp&nbsp
            <input type="submit" value="Deconnexion" formaction="./content/deconnexion.php" class="btn btn-outline-danger my-2 my-sm-0">
        </form>
    </div>
</nav>

