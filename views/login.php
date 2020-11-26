<?php
//login et pass de base pour faire des tests
//L'étapes suivante est de faire des appel en base de données
$login_valide = "test@test.com";
$pwd_valide = "test";

//Existance des variables
if(isset($_POST['email']) && isset($_POST['password'])){
    //Condition de réussite
    if($login_valide == $_POST['email'] && $pwd_valide == $_POST['password']){
        //Si tous est ok => on démarre la session
        session_start();
        //On enregistre les paramètres de notre visiteur dans une variables $session
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        //Si tous est bon => on redirige vers la page d'accueil
        //ATTENTION AU ROUTING index.php?url=accueil
        header("Location: ../index.php?url=accueil");
    }else{
        //Le login ou mot de passe sont pas bon => on crée une alert JS
        echo '<p class="alert-danger p-2">Une erreur est apparue, merci de vérifier votre email et mot de passe !</p>';
        //On refresh la page
        header("Location: ../index.php?url=connexion");
    }
}else{
    echo "Erreur : Les variables sont inconnue !";
}