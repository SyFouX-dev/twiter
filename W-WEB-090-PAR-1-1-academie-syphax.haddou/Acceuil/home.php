<?php
session_start();
include_once('../connexion/connexion.php'); 

if (!isset($_SESSION['email'])) {

    header("Location: connextion.php");
    exit;
}

?>

<?php 
$email = $_SESSION['email'];
$requete = "SELECT * FROM user WHERE mail='$email'";
$stmt = $db->query($requete);
$users = $stmt->fetchAll();
foreach($users as $user){
    $currentId =  $user['id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="../src/output.css" rel="stylesheet">
    <link rel="ABC icon" href="../asset/logoglob.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../style.css/home.css">
    <script src="../script/home.js"></script>

</head>

<body>
    <nav class="grid grid-cols-12">
        <section class="col-span-2">
            <div class="wrapper">
                <div class="sidebar">
                <div iv class="profile">
                        <img src="../asset/logoglob.png" alt="">
                        <h3>THE GLOBE</h3>
                    </div>
                    <ul>
                        <li><a href="home.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="item">Home</span>
                            </a></li>

                        <li><a href="search.php">
                                <span class="icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                <span class="item">Search</span>
                            </a></li>

                        <li><a href="notif.php">
                                <span class="icon"><i class="fa-regular fa-bell"></i></span>
                                <span class="item">Notifications</span>
                            </a></li>

                        <li><a href="#">
                                <span class="icon"><i class="fa-regular fa-message"></i></span>
                                <span class="item">Messages</span>
                            </a></li>

                        <li><a href="profile.php">
                                <span class="icon"><i class="fa-solid fa-user"></i></span>
                                <span class="item">Profile</span>
                            </a></li>

                        <li><a href="#">
                                <span class="icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="item">Autre</span>
                            </a></li>

                        <li><a href="deconnnexion.php">
                            <span class="icon"><i class="fa-solid fa-power-off"></i></span>
                            <span class="deco">Déconnexion</span>
                        </a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="col-span-5 post">
            <div class="container">
                <form action='variable.php' method="post">
                    <textarea name="tweet" id="tweet" placeholder="Quoi de neuf ?"  maxlength="140" size="10"></textarea>
                    <input name="id" type="hidden" value= "<?php echo $currentId?>" >
                    <button><i class="fa-regular fa-images"></i></button>
                    <button><i class="fa-regular fa-face-smile"></i></button>
                    <button><i class="fa-solid fa-location-dot"></i></button>
                    <button class="poster" type="submit">POSTER</button>
                    <div id="barre"></div>
                </form>
            </div>
        </section>
        <section class="col-span-5 post">
        <form action="home.php" method="POST">
            <input type="text" name="search" placeholder="search" id="gsearch">
            <button type="submit">Search</button>
        </from>
    <?php
    if($_POST['search'] != ''){
    $search = $_POST['search'];  
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $db->prepare("SELECT at_user_name FROM user WHERE at_user_name LIKE ?");
        $sql->execute(["%$search%"]);
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        if($result) {
            foreach($result as $value) {
                echo "<p>" . $value['at_user_name'] . "</p>";
            }
        } else {
            echo "<p>" . "Aucun résultat trouvé." . "</p>";
        }
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "<p>" . "Veuillez entrer un terme de recherche." . "</p>";
}
?>
        </div>
        
    </section>
</nav>
    
</body>
</html>



