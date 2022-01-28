<?php 
require_once('connexion.php');
$database =new Connection;
$db =$database->open();

if (isset($_GET['id'])) {
    $id=$_GET['id'];
require_once('fonctions.php');
$user=fetchone($id,$db);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$ville = $_POST['ville'];
 echo '
 <br><br>
 
 <div class="container">
 <span class="d-block p-2 bg-secondary text-white">Données à modifier</span>
 <div class="shadow p-3 mb-5 bg-body rounded">
 <div class="card-body">
 <form method="post">
  <div class="form-group">
  <label>Username</label>
<input  class="form-control form-control-lg" type="text" name="name" value="'.$user['user_nam'].'">
</div>
  <div class="form-group">
   <label>E-mail</label>
<input  class="form-control form-control-lg" type="text" name="email" value="'.$user['user_email'].'">
</div>
  <div class="form-group">
   <label>Password</label>
<input  class="form-control form-control-lg" type="text" name="pass" value="'.$user['user_mdp'].'">
</div>
  <div class="form-group">
   <label>Id</label>
<input  class="form-control form-control-lg" type="text" name="id" value="'.$user['user_id'].'">
</div>
  <div class="form-group">
   <label>Firstname</label>
<input  class="form-control form-control-lg" type="text" name="firstname" value="'.$user['user_firstname'].'">
</div>
  <div class="form-group">
   <label>Lastname</label>
<input  class="form-control form-control-lg" type="text" name="lastname" value="'.$user['user_lastname'].'">
</div>
  <div class="form-group">
   <label>Telephone</label>
<input  class="form-control form-control-lg" type="text" name="tel" value="'.$user['user_tel'].'">
</div>
  <div class="form-group">
   <label>Ville/Adresse</label>
<input  class="form-control form-control-lg" type="text" name="ville" value="'.$user['user_ville'].'">
</div>
  <div class="form-group">
<input class="btn btn-outline-primary" type="submit" name="updat" value="Mettre à jour">
</div>
</form>
</div>
</div>
</div>
';
                 
}
if (isset($_POST['updat'])) {
$updated=update($_POST['id'],$db,$_POST['name'],$_POST['email'],$_POST['pass'],$_POST['firstname'],$_POST['lastname'],$_POST['tel'],$_POST['ville']);
}
?>
<style>
    
</style>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>