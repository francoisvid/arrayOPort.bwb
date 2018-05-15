<body>
<?php
if(isset($_GET['page']) == false){
    include './content/accueil.php';
}else{
    include './content/' .$_GET['page'];
}

?>
</body>

