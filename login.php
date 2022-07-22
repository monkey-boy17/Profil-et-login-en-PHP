<?php
session_start();
if(isset($_SESSION['connexion']) && !empty($_SESSION['connexion'])){
    header('Location: ./profil.php');
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
    <form action="traitement_login.php" method="POST">
        <input type="email" name="email" id="" placeholder="Emtrez votre Email"><br><br>
        <input type="password" name="password" placeholder="Entrez votre mot de passe" id=""><br><br>
        <input type="submit" value="connexion">
    </form>
    <?// (isset($_GET['error'])) ? $_GET['error'] : "" ?>
</body>
</html>