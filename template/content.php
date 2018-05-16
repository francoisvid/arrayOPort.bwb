<body>
<?php
if(isset($_GET['page']) == false){
    include './content/Accueil.php';
}else{
    include './content/' .$_GET['page'];
}

?>
</body>

