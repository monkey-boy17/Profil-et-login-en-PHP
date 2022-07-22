<?php
session_start();
if(isset($_SESSION['enregistrement']) && !empty($_SESSION['enregistrement'])){
    header('location: ./profil.php');
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
    <form method="POST" action="traitement_index.php">
        <input type="text" placeholder="Entrez votre nom" name="name"><br><br>
        <input type="email" placeholder="Entrez votre Email" name="email"><br><br>
        <select name="gender">
            <option value="homme">homme</option>
            <option value="femme">femme</option>
            <option value="Autres">Autres</option>
        </select><br><br>
        <input type="tel" placeholder="Entrez votre numero de telephone" name="phone"><br><br>
        <input type="text" placeholder="Entrez votre promotion" name="promotion"><br><br>
        <input type="password" placeholder="Entrez votre mot de passe" name="password"><br><br>
        <input type="submit" value="Enregistrement">

    </form>
</body>
</html>

