

<?php
$title = "QIWOGAMES -ACCUEIL-";
    //On demarre la session, ceci est indispansable pour toutes les pages ou on besoin d'etre logué
    session_start();
    //On recup les variables de session

?>
<div id="home-page" class="container">
    <h1 class="text-center text-info">BIENVENUE <?= $_SESSION['email'] ?></h1>

    <?php
    if(isset($_SESSION['email']) && isset($_SESSION['password'])){
        echo "Votre email : " .$_SESSION['email']. " et votre mot de passe : " .$_SESSION['password'] . "<br />";
        echo "<a class='btn btn-outline-success' href='index.php?url=deconnexion'>Deconnexion</a>";
    }else{
        echo "Erreur : Les varaibales sont inconnues !";
    }
    ?>
    <h2 class="text-center text-danger">ET VOILA !</h2>
</div>




