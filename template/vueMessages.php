<?php
//file get content retourne une chaine de caractere que je stocke dans message
$url = $_SERVER['DOCUMENT_ROOT'] . "/data/message.json";
$messages = file_get_contents($url);
$listeDeMessages = json_decode($messages, true);

// Boucle qui permet de recuperer la liste de messages et de les affficher avec un certain style
foreach ($listeDeMessages as $values) {
     ?><hr color="black"><?php
     
    foreach ($values as $key => $value) {
        ?>
        <div class="message">
            <?php
            echo "<h5>" . $key . " : </h5>" . "<h6>" . $value . "</h6>";
            ?>

        </div>
        <?php
    }
            
}    