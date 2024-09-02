<?php
    session_start();
    include_once "../connexion/connexion.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenu sur la page de connextion</title>
  <link rel="ABC icon" href="../asset/logoglob.png"/>
  <link rel="stylesheet" href="../style.css/connextion.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="login-box">
    <img src="../asset/logoglob.png" class="logo">
    <h2> Connectez-vous à THE GLOBE </h2>
    <form action="connextion.php" method="POST">
      <i class="fa-solid fa-square-envelope email"></i>
        <input type="mail" name="mail" placeholder="Adresse e-mail" required>
        <i class="fa-solid fa-lock password"></i>
        <input type="password" id="pass" name="password" placeholder="Mot de passe" minlength="8" required >
        <button type="submit">Suivant</button>
    </form>
    <a href="mdpoublie.php"><button>Mot de passe oublié ?</button></a>
    <p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
    
    <?php $_SESSION['email']= $_POST['mail']; ?>
    
</div>
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST["mail"];
    $password = $_POST["password"];

    $encryptedPassword = hash('ripemd160','vive le projet tweet_academy'.$password);

    $query = "SELECT * FROM user WHERE mail = '$mail' AND password = '$encryptedPassword'";
    
    if ($stmt = $db->prepare($query)) {
        $stmt->execute();

        $result = $stmt->fetchAll();
        if ($result) {
            echo "Connexion réussie !";
            header('Location: home.php');
        } else {
            echo "Adresse e-mail ou mot de passe incorrect.";
        }
    } else {
        echo "Erreur de préparation de la requête.";
    }

    $user = 'SELECT * FROM user WHERE mail ='.$_POST['mail'];
    $a = $db->query($user);
    $id = $a->fetchAll();

    echo $id; 

     


}
?>

