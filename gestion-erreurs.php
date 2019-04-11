<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
</head>
<body>
<?php
	/*if (!file_exists("inconnu.php")){
			die("Fichier Non trouvé");
		} else {
			$fichier = fopen("inconu.txt", "r");
	}*/

		function Division($x,$y){
			if($y==0){
				throw new Exception("Division par zero impossible");
				}
				return $x/$y;
			}
			try{			
				echo Division(2,4);
				echo Division(2,0);
				echo Division(2,1);
				}
			Catch(Exception $e){
				echo'Message d\'erreur:  ' .$e->getMessage();
				}
?>
</body>
</html>
