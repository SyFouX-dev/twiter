<?php
    include_once ("../connexion/connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscrivez-vous</title>
  <link rel="stylesheet" href="../style.css/inscirptions.css">
  <link rel="ABC icon" href="../asset/logoglob.png"/>
</head>
<body>
<div class="login-box">
    <img src="../asset/logoglob.png" class="logo">
    <h2> Créer votre compte </h2>
    <hr>

    <form action="./inscription.php" method="POST">
        <input type="text" name="prenom" placeholder="Nom et Prénom" required>
        <input type="text" name="utilisateur" placeholder="Nom d'utilisateur"  required>
        <input type="email" name="email" placeholder="Adresse e-mail" required>
        <input type="password" name="password" placeholder="Mot de passe" minlength="8" required>

        <div date="date">
        <h3>Date de naissance :</h3>
        <p>L'age minimum pour s'inscrire à GLOBEe est de 15ans, vous ne pourrez vous y inscrire si vous êtes plus jeune</p>
        <input type="date" name="naissance" required autocomplete="off"/>
        </div>
        <button type="submit">Suivant</button>
        <p>Vous possédez déja un compte ? <a href="connextion.php">Connectez-vous</a></p>
    </form>

</body>
</html>


<?php

$prenom = $_POST['prenom'];
$utilisateur = '@'.$_POST['utilisateur'];
$email = $_POST['email'];
$password = hash('ripemd160','vive le projet tweet_academy'.$_POST['password']);
$naissance = $_POST['naissance'];


$base = "INSERT INTO user (username, at_user_name, profile_picture, bio, banner, mail, password, birthdate, private, creation_time, city, campus) 
           VALUES ('$prenom', '$utilisateur', '../asset/profile.png', NULL, '../asset/profile.png', '$email', '$password', '$naissance', NULL, DEFAULT , NULL, NULL)";
if ($db->query($base)) {
    echo "Inscription réussie !";
    header('Location: connextion.php');
    exit();
} else {
    echo "Erreur lors de l'inscription : " .  print_r($db->errorInfo(), true);
}


