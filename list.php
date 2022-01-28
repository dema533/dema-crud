<?php

$id=8;
require_once('connexion.php');
$database =new Connection;
$db =$database->open();
require_once('fonctions.php');
$user=fetchone($id,$db);
$users=fetchall($db,"users");
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>LISTES</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s;
}

/* Modal Content */
.modal-content {
  position: fixed;
  bottom: 0;
  background-color: #fefefe;
  width: 100%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close {
  color: white;
  float: left;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: rgb(14, 14, 63);
  color: white;
  text-align: center;
}

.modal-body {padding: 2px 16px;

}

.modal-footer {
  padding: 2px 16px;
  background-color: rgb(5, 5, 21);
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}


form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 400px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  font: 1em sans-serif;
  width: 300px;
  box-sizing: border-box;
  border: 1px solid #999;
}
input:focus, textarea:focus {
 border-color: #000;
 border-bottom: #000 solid 1px;
}
.button {
  padding-left: 90px; /* même taille que les étiquettes */
}
button {
 
  margin-left: .5em;
}

</style>
</head>
<body>
 


	<div class="limiter">
      
		<div class="container-table100">
               
			<div class="wrap-table100">
                <h2 style="text-align: center;">LISTES DES UTILISATEURS CMZ</h2>
                <button id="myBtn" class="btn btn-outline-primary">ADD NEW</button>
				<div class="table100 ver1 m-b-110" >
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								
						        <th class="column100 column2" data-column="column2">ID</th>
								<th class="column100 column3" data-column="column3">NOM</th>
								<th class="column100 column4" data-column="column4">EMAIL</th>
								<th class="column100 column5" data-column="column5">PASSE</th>
                <th class="column100 column5" data-column="column5">FIRSTNAME</th>
                	<th class="column100 column5" data-column="column5">LASTNAME</th>
                  	<th class="column100 column5" data-column="column5">VILLE</th>
                    	<th class="column100 column5" data-column="column5">TELEPHONE</th>
                      	<th class="column100 column5" data-column="column5">PHOTO</th>
							    <th class="column100 column1" data-column="column1">ACTIONS </th>
                             
							</tr>
						</thead>
						<tbody>
							
                                <?php
                                foreach ($users as $values):?> 
                                <tr class="row100">
								<td class="column100 column2" data-column="column2"><?php echo $values['user_id'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $values['user_nam']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $values['user_email']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $values['user_mdp'];?> </td>
                <td class="column100 column6" data-column="column6"><?php echo $values['user_firstname'];?> </td>
                <td class="column100 column7" data-column="column7"><?php echo $values['user_lastname'];?> </td>
                <td class="column100 column8" data-column="column8"><?php echo $values['user_ville'];?> </td>
                <td class="column100 column9" data-column="column9"><?php echo $values['user_tel'];?> </td>
                <td class="column100 column10" data-column="column10"><?php echo $values['user_photo'];?> </td>
                                <td class="column100 column5" data-column="column1"><a class="btn btn-primary" href="edit.php?id=<?php echo $values['user_id'];?>" >EDIT </a>&nbsp;&nbsp;<a class="btn btn-danger" href="del.php?id=<?php echo $values['user_id'];?>">DEL</a></td>
                            	</tr>    
						    	<?php endforeach; ?>
						

						
						</tbody>
					</table>
				</div>

                        
        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
            <span class="close">&times;</span>
            <h2>ADD NEW USER</h2>
            </div>
            <div class="modal-body">
                <form method="POST" class="register-form" id="register-form" action="registeradmin.php" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user_name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="user_email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
            </div>
            <div class="modal-footer">
            <h3>Modal Footer</h3>
            </div>
        </div>

        </div>


			</div>
		</div>
	</div>




    <script>

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/mains.js"></script>

</body>
</html>