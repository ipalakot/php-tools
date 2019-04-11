<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES VARIABLES</title>
</head>

<body>

<?php

// TEST SUR LES VARIABLES

		function Bonjour(){
			$a= 1+3;
			if (is_int($a))
			{
				echo 'Yes Sir ,  '. $a. ' is  ' ;
				echo gettype($a);
			}
				else
				{
					echo 'No Sir,  '. $a. '  isnt String';
				}
		 }
		 Bonjour();


 echo '<br/>';
 echo '<br/>'; 


$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;
echo $GLOBALS['x'], "<br />";
echo $GLOBALS['y'], "<br />";
echo $GLOBALS['z'], "<br />";



// VARIABLE GLOGAL
			$a=1; // globale par défaut
			$b=2; // idem
			function foo() {
			global $a,$b; // on récupère les variables globales
			$b=$a+$b;
			echo $b;
			}
			foo() ;
			echo '<br/>'; 
			echo $b; // affiche 3
			echo '<br/>'; 

	 echo '--------------<br/> <br/>'; 


// DEPARTEMENT DE YONNE
		 $departement = "SENS";
		 $chiffre = 89;
		 echo 'La region ' .$departement. ' est dans le YONN <br>'; 
		 echo "Son Numero est le: $chiffre <br/> <br/>"; 
		 echo '--------------<br/> <br/>'; 


// Variable OJET
		class test {
			function affiche_hello() {
				echo "<br/>";
				echo "Hello !";
			}
		}
		$obj=new test;
		$obj->affiche_hello();


		echo (5 % 3)."\n";           // affiche 2
		echo (5 % -3)."\n";          // affiche 2
		echo (-5 % 3)."\n";          // affiche -2
		echo (-5 % -3)."\n";         // affiche -2


// SURPEGOLBALS --- VARIABLES $GLOBALS
		$foo = "Exemple de contenu";	    
		function test() {
		    $foo = "variable locale";
		    echo '$foo dans le contexte global : ' . $GLOBALS["foo"] . "<br/> \n";
		    echo '$foo dans le contexte courant : ' . $foo . "<br/>\n";
		    echo '-----------<br/> <br/>'; 
		}

	
		test();

// SURPEGOLBALS --- $_SERVER

		echo $_SERVER['SERVER_PORT'];
		echo '<br/> -----------<br/> <br/>'; 


// SURPEGOLBALS --- $_SERVER

			/*$indicesServer = array(
								'PHP_SELF', 
								'GATEWAY_INTERFACE', 
								'SERVER_ADDR', 
								'SERVER_NAME', 
								'SERVER_SOFTWARE', 
								'SERVER_PROTOCOL', 
								'REQUEST_METHOD', 
								'REQUEST_TIME', 
								'REQUEST_TIME_FLOAT') ; 

					echo '<table cellpadding="10">' ; 
					foreach ($indicesServer as $arg) { 
					    if (isset($_SERVER[$arg])) { 
					        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
					    } 
					    else { 
					        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
					    } 
					} 
					echo '</table>' ; 
			*/


/*$AGENT=$_SERVER['HTTP_USER_AGENT'];
		echo $AGENT;
		echo("\n<P>");
			if (stristr($AGENT,"MSIE"))
				echo "Vous semblez utiliser Internet Explorer !</b>";
			elseif (ereg("Firefox",$AGENT))
				echo "Vous semblez utiliser Firefox !</b>";
			elseif (eregi("chrome",$AGENT))
				echo "Vous semblez utiliser Chrome !</b>"; */


	$array = array(
		    1    => "a",
		    "1"  => "b",
		    1.5  => "c",
		    true => "d",
		    3    => "G",
			);
			echo "<br/>";
			var_dump($array) ;


?>

</body>
</html>




		