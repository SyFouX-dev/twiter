<?php
    session_start();
    include_once "../connexion/connexion.php";
    
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
    <link rel="stylesheet" href="../style.css/search.css">

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
        
        <section class="col-span-9 post">
        <form action="search.php" method="POST">
        <input type="text" name="search" id="gsearch" placeholder="Entrez le nom d'utilisateur">
        <button type="submit">Search</button>

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
    </form>

        </div>
        
    </section>
</nav>
    
</body>
</html>


