<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE GLOBE</title>
    <link href="../src/output.css" rel="stylesheet">
    <link rel="ABC icon" href="../asset/logoglob.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../style.css/profile.css">
</head>

<body>
    <nav class="grid grid-cols-12">
        <section class="col-span-2">
            <div class="wrapper">
                <div class="sidebar">
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
        <div class="profile">
            <div class="banner"></div>
            <img src="../asset/profile.png" alt="Votre photo" class="avatar" id="avatar">
            <label for="input-file"><i class="fa-solid fa-camera"></i></label>profil
            <input type="file" accept="image/jpeg , image/png , image/jpg," id="input-file">
            
            <button class="edit">Edit Profile</button>
            <div class="name">Nom du profil</div>
            <div class="username">@ Nom d'utilisateur</div>
            <div class="location"><i class="fa-solid fa-location-dot icon-pos"></i> Ville: Paris</div>
            <div class="joined"><i class="fa-solid fa-calendar-days"></i> Date de création du compte</div>
            <div class="bio">Votre BIO</div>
            <div class="stats">
              <div class="following"><a href="#">Following 54</a></div>
              <div class="followers"><a href="#">Followers 501K</a></div>
              <ul>
                <li>Tweets</li>
                <li>Retwetter</li>
                <li>Highlights</li>
                <li>Media</li>
                <li>Likes</li>
              </ul>
            </div>
            <hr>
            <div class="Tweets">
              <img class="imgs" src="../asset/image.png" alt="">
              <div class="name-tw">Elon Musk <i class="fa-solid fa-certificate certif"></i></div>
              <div class="username-tw">@Elon Musk</div>
              <div class="time">Dec 13,2027</div>
              <div class="ellipsis"><a href="#"><i class="fa-solid fa-ellipsis"></i></a></div>
            </div>
            <p>it’s not too late to slide into your crush’s DMs x</p>
            <div class="icon">
              <div class="com"><i class="fa-regular fa-comment"></i></div>
              <div class="re"><i class="fa-solid fa-retweet"></i></div>
              <div class="like"><i class="fa-regular fa-heart"></i></div>
              <div class="book"><i class="fa-regular fa-bookmark"></i></div>
            </div>
          </div>
    </section>

    <section class="col-span-9 post">
        <!-- <input type="text" name="search" id="gsearch" placeholder="Entrez le nom d'utilisateur">
        <button type="submit">Search</button>   -->
      </section>

    </nav>
</body>
</html>