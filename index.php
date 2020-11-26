<?php

if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = "connexion";
}

ob_start();

if($url == "connexion"){
    require "views/connexion.php";
}elseif ($url == "accueil"){
    require "views/accueil.php";
}elseif ($url == "deconnexion"){
    require "views/deconnexion.php";
}

$content = ob_get_clean();
require "views/template.php";