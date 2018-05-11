<?php

    if (isset($_POST) && !empty($_POST)) {
        echo "dernier message posté le : $date à : $heure"
        ?><br><br><?php
                foreach ($_POST as $key => $val) {
                    // Si le panier n'existe pas on le créer
                     echo $key . " : " . $val . "</br>";
                    $_SESSION['panier_test'][] = array($key, $val);
                }
            }
            else {
                echo "Aucuns nouveaux messages postés.";
            }
            echo "<br><br>Tous les messages :<br><br>";
            foreach ($_SESSION['panier_test'] as $val) {
                echo $val[0] . " : " . $val[1] . "<br>";
                
            }
//            json_encode($_POST);
//            var_dump(json_encode($_POST));
            
            ?>

