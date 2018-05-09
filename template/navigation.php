<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse justify-content-md-center collapse" id="navbarsExample08" style="">
        <ul class="navbar-nav">



            <?php
            $path = "/home/francois/ServeurWeb/php-decouverte.bwb/content";

            $dossier = opendir($path);

            while (false !== ($entry = readdir($dossier))) {
                if ($entry !== "." && $entry !== "..") {
                    $name = basename($entry, ".php");
                    if ($entry == "Accueil.php") {
                        ?><ul><a href="/"><?= $name ?></a></ul><?php
                    } else {
                        ?><ul><a href="/?page=<?= $entry ?>"><?= $name ?></a></ul><?php
                        }
                    }
                }
                ?>
        </ul>
    </div>
</nav>