<?php 
$user_name= $_POST['user_name'];
$user_email =$_POST['user_email'];
$password =$_POST['password'];

#var_dump($password); exit();
$user_repass=$_POST['re_pass'];

	include_once('connexion.php');
	if(isset($_POST['signup'])){
        //open connection
		$database = new Connection();
		$db = $database->open();
		$erreurs[]='';
		//insert data
		require_once('fonctions.php');
		$query = "INSERT INTO users (`user_nam`, `user_email`, `user_mdp`) VALUES (:user_nam, :user_email, :user_mdp)";
		register($query,$db,$user_name,$user_email,$password);
	}else{
		$erreurs['echec']="Problème: Opération annulé!";
	}
 
	header('location: index.php');
 
