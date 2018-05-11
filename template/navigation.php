<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

                        <?php
            $path = "/home/francois/ServeurWeb/php-decouverte.bwb/content";

            $dossier = opendir($path);

            while (false !== ($entry = readdir($dossier))) {
                if ($entry !== "." && $entry !== "..") {
                    $name = basename($entry, ".php");
                    if ($entry == "Accueil.php") {
                        ?><li class="nav-item"><a class="nav-link" href="/"><?= $name ?></a></li><?php
                    } else {
                        ?><li class="nav-item"><a  class="nav-link" href="/?page=<?= $entry ?>"><?= $name ?></a></li><?php
                        }
                    }
                }
                ?>
          </ul>
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->

        </div>
      </nav>
