<!DOCTYPE html>
<html>
<body>
 
 <?php

// CONNEXION
/*
 	$serveur="localhost";
 	$login="root";
 	$pass="";

 	try{
 		$connexion=new PDO("mysql:host=$serveur;dbaname=test2",$login,$pass);
 		$connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		echo'Connexion reussie';
 	}

 	catch(PDOException $e){
 		echo"Connexion Non Etablie,", $e->getMessage();
 	} */

// CREATTION NEW DATABASE 
 	$serveur="localhost";
 	$login="root";
 	$pass="";
 	/*
 	try{
 		$connexion=new PDO("mysql:host=$serveur",$login,$pass);
 		$connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		$connexion->exec("CREATE DATABASE TEST3");
 		echo"Database created";
 	}

 	catch(PDOException $e){
 		echo'Echec de connexion ' .$e->getMessage();
 	}*/


	 $serveur="localhost";
	 $login="root";
	 $password="";

	 try{
	 	$connexion = new PDO("mysql:host=$serveur", $login,$pass);
	 	$connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	$connexion -> exec("CREATE DATABASE inscription");
	 	echo "New Database created";
	 }

	 catch(PDOException $e){
	 	echo"Echec de creation" .$e->getMessage(); 
	 }
	

// CONNEXION TABLE 3 	
 	/*
 	$serveur="localhost";
 	$login="root";
 	$pass="";
 	
 	try{

 		$connexion=new PDO("mysql:host=$serveur;dbaname=TEST3",$login,$pass);
 		$connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		echo "Connexion reussie";
  	}
 
 	catch(PDOException $e){
 		echo "Echec de Connexion", $e->getMessage();
 	}*/

 // CREATION TABLE
 	/*$serveur="localhost";
 	$login="root";
 	$pass="";

 	try{
 		$connexion=new PDO("mysql:host=$serveur;dbname=TEST3",$login,$pass);
 		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		$codesql="CREATE TABLE VISITEURS(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 										 nom VARCHAR(50),
 										 prenom VARCHAR(50),
 										 mail VARCHAR(50)
 										)";
		$connexion->exec($codesql);
		echo'TABLE CREATED';
 	}	
	catch(PDOException $e){
		echo "Connexion error", $e->getMessage();

	}*/

?>
</body>
</html>