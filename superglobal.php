<? php
	session_start() 
?>

<?php   	$nom_coookies="utilisateur";
			$valeur_cookies="pierre";
			
			setcookie($nom_coookies, $valeur_cookies, time() +3600, "/", "ipalakot.com", false, true); 	
			$nom_coookies2="TEST";
			$valeur_cookies2="THIS IS A TEST";
			
			setcookie($nom_coookies2, $valeur_cookies2);
			echo  $_COOKIE["TEST"]	;
?>	

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>
<body>
    <H4>FONCTIONS TABLEAUX</H4>
   <?php
		/* $GLOBALS
		$x=10;
		$y=20;
		function Mult() {
				$GLOBALS['z']=$GLOBALS['x']*$GLOBALS['y'];		
		}
		Mult();
		echo $z;*/
		/*$_SERVER 
			echo $_SERVER['PHP_SELF']. '<br/>';
			echo $_SERVER['SERVER_ADDR'].'<br/>';
			echo $_SERVER['SERVER_NAME']. '<br/>';
			echo $_SERVER['SCRIPT_NAME']. '<br/>';
			echo $_SERVER['HTTP_HOST'].'<br/>';*/
		/*$_COOKIE*/
	?>			
<?php
	$_SESSION['prenom']="Pierre";
	$_SESSION['age']=24;
	$_SESSION['sport']="Trail";
?>

</body>
</html>