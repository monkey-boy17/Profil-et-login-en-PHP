<?php 
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$promotion = $_POST['promotion'];
$passWord = $_POST['password'];

if($name != false && $email != false && $gender != false && $phone != false
&& $promotion != false && $passWord 
!= false){
    
     $_SESSION['enregistrement'][$email] = ['name' => $name,'phone' => $phone, 'email' => $email, 'genre' => $genre, 'password' => $password];
        $_SESSION['connexion'] = ['name' => $name,'phone' => $phone, 'email' => $email, 'genre' => $genre, 'password' => $password];
        header('Location: ./profile.php');
    }

    if ($name == false) {
        echo "Le champ nom est vide <br>";
    }
    
    if ($email == false) {
        echo "Le champ email est vide <br>";
    }

    if ($genre == false) {
        echo "Le champ genre est vide <br>";
    }

    if ($phone == false) {
        echo "Le champ telephone est vide <br>";
    }
    
    if ($promotion == false) {
        echo "Le champ promotion est vide <br>";
    }
    
    if ($password == false) {
        echo "Le champ mot de passe  est vide";
    }



?>