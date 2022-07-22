<?php 
session_start();

$user = $_SESSION['enregistrement'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($_SESSION['enregistrement'][$email]) && $password == $_SESSION['enregistrement'][$email]['password']) {
    $_SESSION['connexion'] = $_SESSION['enregistrement'][$email];
    header('Location: ./profile.php');
} else {
    //header('Location: ./login.php?error=informations incorrectes');
}
?>