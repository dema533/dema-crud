<?php

function authentication($db,$username,$password)
{
		$query  =   "SELECT * FROM users WHERE user_nam=:username AND user_mdp=:pass";
		$statement=$db->prepare($query);
		$statement->execute
				([
					'username'  =>  $username,
					'pass'      =>  $password
				]);
		return $statement;
}

function SelectUser($db,$username){
		$query ="SELECT * FROM users WHERE user_nam=:username";
		$statement = $db->prepare($query);
		$statement->execute(['username'=>$username]);
		$result=$statement->Fetch(PDO::FETCH_ASSOC);
		return $result;
}

function register($query,$db,$user_name,$user_email,$password)
{
   		$erreurs[]='';
    try{
		$stmt = $db->prepare($query);
		$stmt->execute
		([
           ':user_nam' => $user_name , 
           ':user_email' => $user_email , 
           ':user_mdp' => $password
		]);
		$erreurs['succes']="Utilisateur ajouté avec succès !";
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
}

function publisher(){
		
}

 function update($id,$db,$user_name,$user_email,$password,$firstname,$lastname,$tel,$ville)
 {
	 $data = 
	 [
    	'username' => $user_name,
   		'mail' => $user_email,
    	'pass' => $password,
    	'id' => $id,
		'firstname'=>$firstname,
		'lastname'=>$lastname,
		'tel'=>$tel,
		'ville'=>$ville
      ];
		$query = "UPDATE users SET user_nam = :username, user_email =:mail, user_mdp=:pass, user_firstname=:firstname, user_lastname=:lastname, user_tel=:tel, user_ville=:ville WHERE user_id =:id";
		$statement= $db->prepare($query);
		if($statement->execute($data)) {
		header('location:list.php');
		}else{
			echo "Post error!";
		}
 }  

 function UpdatProfile($db,$username,$path)
 {
         $query = "UPDATE users SET user_photo=:photo WHERE user_nam=:username";
         $statement = $db->prepare($query);
		 $statement->execute(['photo'=>$path,'username'=>$username]);
				
              
	 
 }
 
 
 
function fetchone($id,$db)
 {
		$statement=$db->prepare("SELECT * FROM users WHERE user_id=$id");
		$statement->execute();
		$result=$statement->Fetch(PDO::FETCH_ASSOC);
		return $result;
 }

 function fetchall($db,$table)
 {
		$statement=$db->prepare("SELECT * FROM ".$table);
		$statement->execute();
		$result=$statement->FetchAll(PDO::FETCH_ASSOC);
		return $result;
 }

 function delete($id,$db)
 {
		$query = "DELETE FROM users WHERE user_id=?";
		$statement= $db->prepare($query);
		$result=$statement->execute([$id]);
		if ($result) {
		header('location:list.php');
		}
 }

