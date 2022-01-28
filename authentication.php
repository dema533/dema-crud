<?php

$username   =   $_POST['name'];
$password   =   $_POST['password'];

if (isset($_POST['signin'])) 
{

    require_once('connexion.php');
    $database=new Connection();
    $db = $database->open();
 
    //function authentication($query,$db,$username,$password)
   
    require_once ('fonctions.php');
    $userAuth = authentication($db,$username,$password);
    $count=$userAuth->rowCount();


        session_start();
    if ($count >0) 
    {
        foreach  ($userAuth as $row) {
            $user = $row['user_nam'];
            }

            $_SESSION["auth"] = $user;  
            header("location:user_admin/index.php");
        //   echo "User ".$_SESSION['username']. ' Connecté!';

    }else{
        header('location:login.php');
    }
}


