<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES FONCTIONS AFFECTANT LES STRINGS</title>
</head>
<body>
    <H4>LES FONCTIONS AFFECTANT LES STRINGS</H4>
    <?php
	//str_strlen
		echo strlen("bonjour à tous"). '<br/>';
		echo str_word_count("bonjour à tous",0,'à').'<br/>';  
		echo str_word_count("Salut l'Ami",0,"l'"). '<br/>';  
		echo str_repeat("bonjour <br/>",7). '<br/>';  

	//str_repleace
		$texte = "bonjour comment vas tu? oui bonjour";
		echo str_replace("bonjour","bonsoir", $texte, $i) ;  
		echo 'Texte remplacé: ' .$i;  
		echo'<br/>';

	// strtolower(str) strtoupper(string)
		$minmax= "bonjour Comment vas Tu?";
		echo'<br/>';
		echo 'Texte original = ' .$minmax. '<br/>';
		echo 'Texte Minuscul= ' .strtolower($minmax). '<br/>';  
		echo 'Texte Majuscul= ' .strtoupper($minmax). '<br/>';  
	
	//strpos(haystack, needle)

		echo strpos("bonjour", "o" );
		echo'<br/>';
		echo strpos("bonjour Comment vas Tu?", "Tu");

	//	htmlspecialchars(string) htmlspecialchars_decode(string)
		$str='j\'aime le <trong> "PHP3" </strong>';
		echo htmlspecialchars($str);

	// nl2br(string)
		echo'<br/>';
		echo nl2br("Bonjour !
					Comment tu vas?");
	
	// explode(delimiter, string)
		$ch2tb="Bonjour comment vas?";
		echo"<pre>";
		print_r(explode(" ", $ch2tb));
		echo"</pre>";

	// str_split(string)
		print_r(str_split("bonjour",2));

	// implode(glue, pieces)
		$tb2ch=array("bonjour","à","tous");
		echo"<pre>";
		echo (implode(" ", $tb2ch));
		echo"</pre>";
	?>
</body>
</html>