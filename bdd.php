<!DOCTYPE html>
<html>
<body>
 
 <?php

// Création de la Base de données
    /* 
   	$serveur = "localhost";
	$login = "root";
	$pass = ""; 	  
	
	try{
		$connexion = new PDO("mysql:host=$serveur", $login, $pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connexion -> exec("CREATE DATABASE test2");
		echo'Base de données creée';
		}	
	catch(PDOException $e){
			echo 'Echec de la connexion: ' .$e-> getMessage();
			} */

// Connexion à la Base de données 
   /*
   	$serveur = "localhost";
	$login = "root";
	$pass = ""; 	  
	
	try{
		$connexion = new PDO("mysql:host=$serveur;test2", $login, $pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		echo'Votre connexion est reussi';
		}	
		catch(PDOException $e){
			echo 'Echec de la connexion: ' .$e-> getMessage();
			} */


/* Insertion de Table dans la BDs

		$serveur="localhost";
		$login="root";
		$pass="";

		try{
				$connexion= new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
				$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$codesql = "CREATE TABLE visiteurs(	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
													nom VARCHAR(50),
													prenom VARCHAR(50),
													email VARCHAR(50)
												)";
				$connexion->exec($codesql);
				echo "TABLE CREATED  !";
			}
		catch (PDOException $e){
				echo "Echec de Connexion", $e->getMessage();
		} */

/* Insertion dans la BDs 

		$serveur= "localhost";
		$login="root";
		$pass="";

		try{ 
			$connexion = new PDO("mysql:host=$serveur; dbname=test2", $login, $pass);
			$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$Insertion = "INSERT INTO visiteurs (nom,prenom,email)
										VALUE('NETIN', 'NANETTE', 'netinnanette@gmail.com')";
			$connexion->exec($Insertion);
			echo "Valeurs Inserrée " ;
			}
		catch(PDOException $e) {
			echo('Echec de Connexion:  '  .$e->getMessage()); 
		} */

/* Insertion Sécurisée dans la BDs 

		$serveur="localhost";
		$login="root";
		$pass="";

		try{
			$connexion = new PDO("mysql:host=$serveur; dbname=test2", $login, $pass);
			$connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$requetes = $connexion-> prepare (
				"INSERT INTO visiteurs(nom, prenom, email)
				VALUES(:nom, :prenom, :email)"
			);
			$requetes -> bindParam(':nom', $nom);
			$requetes -> bindParam(':prenom', $prenom);
			$requetes -> bindParam(':email', $email);

			$nom = 'PALAKOT';
			$prenom = 'ARON';
			$mail = 'aropalakot@gmail.com';
			$requetes->execute();
		}

		catch (PDOException $e)
			{echo 'Echec de la connexion' .$e->getMessage();
			}*/

/* INSERTION COLONNE DANS LA TABLE
		$serveur="localhost";
		$login="root";
		$pass="";
		
		try{
			$connexion = new PDO("mysql:host=$serveur; dbname=test2", $login, $pass);
			$connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$requete = "ALTER TABLE visiteurs ADD age INT(100)";
			$connexion -> exec($requete);
		}
		catch(PDOException $e)
			{echo "Echec de Connexion: ", $e->getMessage();
		}*/


/* RECUPERATION & AFFICHAGE DE DONNEES
		
		$serveur="localhost";
		$login="root";
		$pass="";

		try{
				$connexion= new PDO("mysql:host=$serveur; dbname=test2", $login, $pass);
				$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$requete=$connexion->prepare (
							"SELECT * FROM visiteurs");

				$requete->execute();

				$resultat=$requete->fetchall();
				echo '<pre>';
				print_r($resultat);
				echo '</pre>';
		}
		catch(PDOException $e){
			echo ' Echec de connexion : ' .$e-getMessage();
		}*/

/* SELECTION ET AFFICHAGE
	$serveur="localhost";
	$login="root";
	$pass="";

	try{
		$connexion = new PDO("mysql:host=$serveur; dbname=test2", $login, $pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$requete1 = $connexion -> prepare(
								"SELECT prenom FROM visiteurs ORDER BY age LIMIT 1,3");
		$requete1 -> execute();
		$resultat = $requete1 -> fetchall();
			echo "<pre>";
			print_r($resultat);
			echo "/pre";	
	}
	catch (PDOException $e) {
		echo "Erreur de Connexion: ", $e->getMessage();
	}*/

/* MISE A JOUR
	$serveur="localhost";
	$login="root";
	$pass="";

	try{
		$connexion = new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		$modif ="UPDATE visiteurs SET age=44 WHERE id=1";
		$requete=$connexion->prepare($modif);
		$requete->execute();
		echo "Mise à jour faite";

	}
	catch (PDOException $e) {
		echo "Erreur Connexion: ", $e->getMessage();
	} */

/* SUPPRESSION
	$serveur="localhost";
	$login="root";
	$pass="";

	try{
		$connexion = new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		$suppr ="DELETE FROM visiteurs WHERE id=6";
		$requete=$connexion->prepare($suppr);
		$requete->execute();
		echo "DATA DELETED";

	}
	catch (PDOException $e) {
		echo "Erreur Connexion: ", $e->getMessage();
	} */

/* SUPPRESSION COLONNE 
	$serveur="localhost";
	$login="root";
	$pass="";

	try{
		$connexion = new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		

		$supprcol ="ALTER TABLE visiteurs DROP age";
		$requete=$connexion->prepare($supprcol);
		$requete->execute();
		echo "COLUMN DELETED";

	}
	catch (PDOException $e) {
		echo "Erreur Connexion: ", $e->getMessage();
	} */


/* SUPPRESSION TABL
	$serveur="localhost";
	$login="root";
	$pass="";

	try{
		$connexion = new PDO("mysql:host=$serveur;dbname=test2",$login,$pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		

		$suppr_tabl ="DROP TABLE visiteurs";
		$requete=$connexion->prepare($suppr_tabl);
		$requete->execute();
		echo "TABLE DELETED";

	}
	catch (PDOException $e) {
		echo "Erreur Connexion: ", $e->getMessage();
	} */

/* JOINTURE 2 TABLES 
	JOINXTURES 
	$serveur="localhost";
	$login="root";
	$pass="";

	try{
		$connexion = new PDO("mysql:host=$serveur; dbname=test2; charset=utf8", $login, $pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$joint_in = "
					SELECT insc.Prenoms, comm.Commentaires
					FROM inscrits AS insc
					LEFT JOIN commentaire AS comm
					ON insc.ID = comm.id_inscrits";
		$requete = $connexion -> prepare($joint_in);
		$requete -> execute();
		$resultat = $requete -> fetchall();

		echo "<pre>";
		print_r($resultat);
		echo "</pre>";
	}
	catch(PDOException $e){
		echo "Erreur de Connexion: " .$e->getMessage();
	} */

/* JOINTURE 2 TABLES 
	UNION 
	
	$serveur="localhost";
	$login="root";
	$pass="";

	try{
		$connexion = new PDO("mysql:host=$serveur; dbname=test2; charset=utf8", $login, $pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$joint_in = "
					SELECT Prenoms FROM inscrits
					UNION
					SELECT Commentaires FROM commentaire";

		$requete = $connexion -> prepare($joint_in);
		$requete -> execute();
		$resultat = $requete -> fetchall();

		echo "<pre>";
		print_r($resultat);
		echo "</pre>";
	}
	catch(PDOException $e){
		echo "Erreur de Connexion: " .$e->getMessage();
	} */

/* JOINTURE 2 TABLES avec les LEFT & RIGHT */

	$serveur="localhost";
	$login="root";
	$pass="";

	try{
		$connexion = new PDO("mysql:host=$serveur; dbname=ogreenimex1018; charset=utf8", $login, $pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$joint_in = "
					SELECT insc.Prenoms, comm.Commentaires
					FROM inscrits AS insc
					LEFT JOIN commentaire AS comm
					ON insc.ID = comm.id_inscrits

					UNION ALL

					SELECT insc.Prenoms, comm.Commentaires
					FROM inscrits AS insc
					RIGHT JOIN commentaire AS comm
					ON insc.ID = comm.id_inscrits
					WHERE insc.ID IS NULL";

		$requete = $connexion -> prepare($joint_in);
		$requete -> execute();
		$resultat = $requete -> fetchall();

		echo "<pre>";
		print_r($resultat);
		echo "</pre>";
	}
	catch(PDOException $e){
		echo "Erreur de Connexion: " .$e->getMessage();
	} 
	
?>
</body>
</html>