<?php
//update_profile.php
session_start();
require_once('../connexion.php');
$database= new Connection;
$db = $database->open();
require_once('../fonctions.php');

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Vérifiez si le fichier image est une image réelle ou une fausse image
if(isset($_POST["upload"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Verifier si le fichier existe deja
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check la taille du fichier
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// autoriser d'autre type de fichier
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType !="svg") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Vérifiez si $uploadOk est défini sur 0 par une erreur
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
//Si tout va bien lancer le téléchargement du fichier
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    UpdatProfile($db,$_SESSION['auth'],$target_file);
      //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}