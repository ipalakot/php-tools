<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES FONCTIONS</title>
</head>
<body>
    <H4>LES FONCTIONS</H4>
    <?php


is_integer($var)


// FONCTION BONJOUR

		function Bonjour(){
			
			echo "TEST SUR LES FONCTIONS <br/> <br/>";
		 }
		 Bonjour();


// FONCTION RACINE CARRE

		function carre ($num) {
		return $num * $num;
		}
		echo 'Racine carre est : ' ;
		echo carre (4); // affiche '16'



		function foo($arg_1, $arg_2, /* ..., */ $arg_n)
			{
			    echo "Exemple de fonction.\n";
			    return $retval;
			}
	
// LES MEMBRES DE MA FAMILLE

			function famille($pere, $mere, $enfant1, $enfant2, $enfant3){
				echo '<br/> <br/>';
				echo 'FAMILLE NETIN PALAKOT / SENS : <br/>';
				echo 'Père : ' .$pere. '<br/>';
				echo 'Mère : ' .$mere. '<br/>';
				echo 'Enfant1 : ' .$enfant1. '<br/>';
				echo 'enfant2 : ' .$enfant2. '<br/>';
				echo 'enfant3 : ' .$enfant3. '<br/>';
			}
			famille ('Igor', 'nanette', 'Aaron', 'Ewen', 'Lauryn');


//Exemple #4 Fonctions récursives 
			function recursion($a)
			{
			    if ($a < 20) {
			        echo "$a\n";
			        recursion($a + 1);
			    }
			ecursion(8);
		}

/* Function written inside another function will be declared when parent function is called.
   Following code will raise no error. Call to bar() function is commented. 
   

		function foo() {
		    
		    function baz() {
		        echo 'baz foo' . PHP_EOL;
		    }
		    echo 'foo ' . PHP_EOL;
		}
		
		function bar() {   
		    function baz() {
		        echo 'baz bar' . PHP_EOL;
		    }		    
		    echo 'bar' . PHP_EOL;
		}
		//foo();
		//bar();
		//baz(); */

//Calling function with in a function or inner function

		function add($a,$b){
		    return $a+$b;
		}

		function sub($a,$b){
		    return $a-$b;
		}

		function math($first, $second) {
		    $res =  add($first, $second)/sub($first, $second);
		    return (int)$res;
		}
		echo"<br/>";
		echo"<br/>";
		echo'Calling function with in a function or inner function';
		echo math(200,100);  //Results  3


// #5 Les arguments sans valeur par défaut doivent être en premiers sinon il y a erreur

			function faireunyaourt ($flavour, $type = "acidophilus" )
			{
			    return "Préparer un bol de $type $flavour.\n";
			}
			 
			echo"<br/>";
			echo"<br/>";
			echo faireunyaourt("framboise");   // ne fonctionne pas comme voulu
			
// Exemple #10 Typage strict

		function sum(int $a, int $b) {
		    return $a + $b;
		}

		echo"<br/>";
		var_dump(sum(1, 2));

		// Ceux-ci vont être forcés en entier: notez l'affichage ci-dessous !
		echo"<br/>";
		var_dump(sum(1.5, 2.5));



/*	function BonjourUtilisateur($prenom){
			echo "<pre>";
			echo 'Bonjour à vous Nouvel utilisateur:  ' .$prenom.  '!';
			echo "</pre>";
		 }
		 BonjourUtilisateur('Pierre'); */

/* Fonction qui affiche le Nom et l'age de l'utilisateur*/

/*function BonjourNom_Age($nom,$age){
			
			echo "Nouvel utilisateur N° _________:  " ;
			echo "\n";
			echo 'NOM  : ' .$nom. '<br/>';
			echo 'AGE  : ' .$age. '!';
		 }
		 BonjourNom_Age('PALAKOT', 44);		 
*/

	?>
</body>
</html>