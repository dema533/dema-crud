<?php
session_start();
require_once('../connexion.php');
require_once('../fonctions.php');
$database = new Connection;
$db = $database->open();


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$ville = $_POST['ville'];


if (isset($_POST['updated'])) {
 
  
  	// Get image name
  	$image = $_FILES['image']['name'];

  	// image file directory
  	$target = "upload/".basename($image);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }  
 

