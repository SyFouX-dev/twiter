<?php
include_once '../connexion/connexion.php';

 
$requete="INSERT INTO tweet(id_user,content) VALUES (".$_POST['id'].",'".$_POST['tweet']."') ";
$db->query($requete);
header('Location: home.php');






// CREATE TABLE `tweet` (
//     `id` int NOT NULL AUTO_INCREMENT,
//     `id_user` int NOT NULL,
//     `id_response` int DEFAULT NULL,
//     `time` datetime DEFAULT CURRENT_TIMESTAMP,
//     `content` varchar(255) NOT NULL,
//     `id_quoted_tweet` int DEFAULT NULL,
//     PRIMARY KEY (`id`)
//   ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;