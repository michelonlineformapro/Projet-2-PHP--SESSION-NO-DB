<?php
$title = "QIWOGAMES -CONNEXION-";
//Mise en place du formulaire qui appel login.php
?>

<div id="login-container">
    <div class="login-content">
            <form action="views/login.php" method="post">
                <h1 class="text-center text-info">CONNEXION</h1>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <p>Pas encore inscrit ? <a href="index.php?url=incription">S'inscrire</a></p>
                <p><a href="#">Email ou mot de passe oubliés</a></p>
                <button type="submit" class="btn btn-outline-info">Connexion</button>
    </div>
</div>
