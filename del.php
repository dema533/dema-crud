<?php
require_once('connexion.php');
$database =new Connection;
$db =$database->open();
if (isset($_GET['id'])) {
$id=$_GET['id'];
require_once('fonctions.php');
$deleted=delete($id,$db);

}