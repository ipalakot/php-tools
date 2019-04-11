<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>
<body>
    <H4>FONCTIONS TABLEAUX  DIMENSIONNEL</H4>
    <?php
	   $membre = array(
	        array('Pierre', 24, 'pierre@gmail.com'),
			array('Paul', 22, 'paul@gmail.com'),
			array('Jacques', 36, 'jacquot@gmail.com'),
			);
		echo $membre[0][0]. ' a ' .$membre[0][1]. ' ans. som mail est: ' .$membre[0][2]. '<br/>';
		echo $membre[1][0]. ' a ' .$membre[1][1]. ' ans. som mail est: ' .$membre[1][2]. '<br/>';
		echo $membre[2][0]. ' a ' .$membre[2][1]. ' ans. som mail est: ' .$membre[2][2]. '<br/>';

	For ($ligne=0; $ligne<=2; $ligne++){
         $membre_no = $ligne+1;
		 echo 'Membre Numero' .$membre_no. '<br/>';
		 echo '<ul>';
		 	For ($col=0; $col<=2; $col++){
         		echo '<li>' .$membre[$ligne][$col]. '<li/>';
				}
		 		echo '<ul>';
	}
	 ?>
		  
</body>
</html>