<?php
session_start();
$affichage = $_SESSION['connexion'];

session_start();
if (empty($_SESSION['connexion'])){
    header('Location: ./login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello <b><?= $affichage['name'] ?></b></h1><br>
    <h2>voici vos informations</h2><br>
    <h3>Nom :<b><?= $affichage['name']?></b></h3>
    <h3>Email :<b><?= $affichage['email']?></b></h3>
    <h3>Telephone :<b><?= $affichage['phone']?></b></h3>
    <h3>Genre :<b><?= $affichage['gender']?></b></h3>
    <h3>Promotion :<b><?= $affichage['promotion']?></b></h3>
    <a href="./deconnexion.php">deconnexion</a>
</body>
</html>