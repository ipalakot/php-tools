<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8"/>
<title>LES CONDTIONS</title>
</head>
<body>
    <H4>FONCTIONS SUR HTML & MYSQL </H4>

<?php

// CARACTERES VEROUILLES

// addslashes - Stripslashes

$str = "Votre nom est-il O'reilly ?";

// Affiche : Votre nom est-il O\'reilly ?
	echo addslashes($str);
		echo"<br/>";



// addslashes - Stripslashes

		$chaine="L'oreille cassée";
		$c1=addslashes($chaine);
		echo $c1; // L\'oreille cassée
		echo stripslashes($c1); // L'oreille cassée

// TSRIP_TAGS

		$chaine="<u><i><b>Bonjour les amis</b></i></u>";
			echo"<br/>";
			echo strip_tags($chaine,'<u><i><b>'); // Bonjour les amis
			echo"<br/>";
			echo strip_tags($chaine,'<b>'); // <b>Bonjour les amis</b> en gras
			echo"<br/>";
			echo strip_tags($chaine); // Bonjour les amis

// urlencode
			echo '<a href="mycgi?foo=', urlencode($userinput), '">';
			$query_string = 'foo=' . urlencode($foo) . '&bar=' . urlencode($bar);
			echo '<a href="mycgi?' . htmlentities($query_string) . '">';

?>
   		
 <H4>FONCTIONS SUR LES CHARAXTERS </H4>
   <?php

// explode — Coupe une chaîne en segments

	$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
	$pieces = explode(" ", $pizza);
	echo $pieces[0]; // piece1
	echo $pieces[1]; // piece2

	// Exemple 2
	$data = "foo:*:1023:1000::/home/foo:/bin/sh";
	list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
	echo $user; // foo
	echo $pass; // *


// wordwrap() 
// effectue la césure d'une chaîne. 
	$chaine="Bonjour les amis et bienvenus dans le merveilleux monde du langage PHP !";
	echo"<br/>";
	echo nl2br(wordwrap($chaine,20));
	echo"<br/>";

 // substr( )
 // découpe une chaîne de caractère en tableau
   	$chaine='abcdef';
	echo substr($chaine,0); // abcdef
	echo"<br/>";
	echo substr($chaine,2,3); // cde
	echo"<br/>";
	echo substr($chaine,-1); // f
	echo"<br/>";
	echo substr($chaine,-3,2); // de

   ?>
			
</body>
</html>