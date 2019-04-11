<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>
<body>
    <H4>UTILISONS LES CONSTANTES </H4>
    	<br/>
    	<br/>
  <?php

//Syntaxe 

		define("BIENVENUE", 3);
		$a=BIENVENUE+3;
		echo $a; 
		echo "<br/>";
		echo "<br/>";


//Syntaxe 

  define("CONSTANTE", " Declaration Constante avec Define");
  echo CONSTANTE; // affiche "Bonjour le monde."

  const CONSTANT = 'Declaration facile avec CONST!';
  echo "<br/>";
  echo CONSTANT;
  	echo "<br/>";
  	echo "<br/>";

// Fonctionne depuis PHP 5.3.0
		const CONSTANT2 = 'const CONSTANT= Valeur !';
		echo "<br/>";
		echo CONSTANT2;

// Fonctionne depuis PHP 5.6.0
		const ANOTHER_CONST = CONSTANT.'; Aurevoir le monde !';
		echo "<br/>";
		echo ANOTHER_CONST;

// Fonctione depuis PHP 7
// Tableau
	define('ANIMALS', array(
	    	'chien',
		    'chat',
		    'oiseaux'
			));
echo "<br/>";
echo "Tableau de constantes: ";	
echo "<br/>";
echo ANIMALS[1]; // affiche "chat"

  // Portée des Constantes

		$a="bonjour";
		define ("NOMBRE", 4);

		function portee() {
			
			echo"<pre>";
			echo NOMBRE;
			echo"</pre>";
			$b=36;
			echo $b;
		}
		portee();

	
	/*
	echo __LINE__. "</br>";
	
	function test(){
		echo __FUNCTION__.  "</br>";
		}
		test();
		echo __FILE__. "</br>";
		echo __DIR__. "</br>";
		echo __LINE<form action="" method="get"></form>__. "</br>"; */

	?>						
</body>
</html>