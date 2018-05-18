<body>
<?php
// Affichage du contenu des pages qui se trouvent dans la barnav
if(isset($_GET['page']) == false){
    include './content/Accueil.php';
}else{
    include './content/' .$_GET['page'];
}

?>
</body>

