<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>
<body>
    <H4>FONCTIONS TABLEAUX</H4>
   <?php
   	
// TABLEAU NUMEROTE & ASSOCIATIF

   	$prenoms = array(
   					"Pierre",
   					"Paul",
   					"Jacques");

   	for ($i=0; $i < 3; $i++) { 			// Affichage avec Boucle FOR
  		echo $prenoms[$i]. "<br/>" ;
   	}

   	foreach ($prenoms as $value) {
   		echo $value. "<br/>"; 
   	}



// TABLEAU  ASSOCIATIF
/*		 
			$age = array(
		       		'Pierre'=>24,
			   		'Paul'=>22,
			   		'Jacques'=> 'Non Renseigné');
					
			foreach($age as $valeurs){
		         echo $valeurs. '<br/>';
			}
			foreach($age as $clefs => $valeurs){
		         echo 'Age de ' .$clefs. ' est:' .$valeurs. '<br/>';
	
		}	
*/

		$tab = array
					("un"=>array(
								"riri",
								1=>"fifi",
								2=>'loulou'),
						2=>array(
								1,
								2,
								3),
						  array(
						  	'un',
						  	'deux',
						  	'trois'));
	?>		
					
</body>
</html>