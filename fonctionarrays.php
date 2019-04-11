<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>
<body>
    <H4>FONCTIONS TABLEAUX</H4>
   <?php
   		
	// array_keys	Retourne toutes les cl�s ou un ensemble des cl�s d'un tableau 
 /*
  		$voitures = array (
			"citroyen" => "306",
			"Renault" => "Clio",
			"Peugeot" => "306");
			echo "<pre>";
			print_r(array_keys($voitures));	
			echo "</pre>"; */
   
	// array_keys Parametre optionnel 	(true & False )
	//true verifie si l'�galist� est sur 306
 /*
  		$voitures = array (
			"citroyen" => "306",
			"Renault" => "Clio",
			"Peugeot" => "306",
  			"Peugeot2" => 306);
			echo "<pre>";
			print_r(array_keys($voitures),306, true);	
			echo "</pre>"; */
    
   //array_values 
  // Nouveau tableau sans les cl�s
		/*
		$loisirs = array (
				"sport" => "Trail",
				"voyage" => "Ecosse",
				"musique" => "Guitare");
		echo "<pre>";
		print_r(array_values($loisirs));
		echo "</pre>";	*/ 
		
	// array_key_exist
		/*
		$voitures = array (
			"citroen" => "306",
			"Renault" => "Clio",
			"Peugeot" => "306");
			if(array_key_exists("citroyen",$voitures)) {
				echo 'CETTE CLE EXITE BEL ET BIEN';
			 }
			else {
				echo "La cl� n'existe pas Mr ";
				} */
	

	// array_search � Recherche dans un tableau la cl� associ�e � la premi�re valeur 		
	/*
	$voitures = array (
			"citroen" => "DS3",
			"Renault" => "Clio",
			"Peugeot" => "306");
			echo array_search("306",$voitures, true); */		
	
	
	/* in_array � Indique si une valeur appartient � un tableau
	 $prenoms = array("Pierre", "Paul", "jacques");
	 if (in_array ("Pierre", $prenoms)){
	 	echo " Prenoms trouv�" ;
		 }
	else{
		 	echo " Prenoms trouv�";
			} */
	
	/* count  
	Compte tous les �l�ments d'un tableau ou quelque chose d'un objet 
	$sports = array ("natation" , "velo", "course");
			echo count($sports); */

	/* array_count_values <br>
	Compte le nombre de valeurs d'un tableau 
	$compter = array ("A", "Velo", "natation", "Velo", "A");
	echo "<pre>";
	print_r (array_count_values($compter)); 
	echo "</pre>"; */
	
	// array_diff_assoc
	//Calcule la diff�rence de deux tableaux, en prenant aussi en compte les cl�s 
	/* $compare=array("a"=>"bleu", "b" =>"vert", "c"=>"jaune");
	$comparant=array("a"=>"bleu", "b" =>"vert");
		print_r(array_diff_assoc($compare,$comparant));*/ 
	
	/* array_intersect_assoc 
	Calcule l'intersection de deux tableaux avec des tests sur les index 
		$compare=array("a"=>"bleu", "b" =>"vert", "c"=>"jaune");
		$comparant=array("a"=>"jaune", "b" =>"vert");
			echo "<pre>";
			print_r(array_intersect($compare,$comparant)); 
			echo "</pre>";*/
	
	// array_fill  
	//Remplit un tableau avec une m�me valeur qu�on va repeter 1 certain nombre de 						    fois 
	/*		
		$compare=array("a"=>"bleu", "b" =>"vert", "c"=>"jaune");
		$comparant=array("a"=>"jaune", "b" =>"vert");
			$remplissage = array_fill(0, 5, "vert"); 
			echo "<pre>";
			print_r($remplissage);
			echo "</pre>"; */
			
	// array_fill_keys  
	// Remplit un tableau avec des valeurs, en sp�cifiant les cl�s
	/*
	$clefs=array("a","b","c","d");
	$remplir=array_fill_keys($clefs,"bleu");
	echo "<pre>";
	print_r($remplir);
	echo "</pre>"; */

	// array_push & array_pop
	//Inseerrer un ou plusieurs �l�ments � la fin d'un tableau 
	
	$couleur =array("bleu", "vert");
	array_push($couleur, "rouge","jaune");
	echo "<pre>";
	print_r($couleur);
	array_pop($couleur);
	print_r($couleur);
	echo "</pre>"; 

	/*array_unshift � array_shift
	Ins�rer ou supprime un ou plusieurs �l�ments au d�but d'un tableau

	$couleur =array("bleu", "vert");
	array_unshift ($couleur, "jaune","violet");
	echo "<pre>";
	print_r($couleur);
	echo "</pre>";
	
	echo array_shift($couleur);
	echo "<pre>";
	print_r($couleur);
	echo "</pre>"; */
	
	/* array_splice( )  
	Supprime certains �l�ments d�un tableau � partir d�une certaine position et les remplace par de nouveaux �l�ments  

	$couleur1=array("a"=>"bleu", "b" =>"vert", "c"=>"jaune");
	$couleur2=array("a"=>"rouge", "b" =>"violet");
	print_r(array_splice($couleur1, 1,2,$couleur1));
	echo "<pre>";
	print_r($couleur1);
	echo "</pre>"; */ 
	
	/* array_merge � Fusionne plusieurs tableaux en un seul 
	$alpha=array("a","b");
	$beta=array("c","d");
	$omega=(array_merge($alpha,$beta));
	echo "<pre>";
	print_r($omega);
	echo "</pre>"; */
	
	/*array_combine ()
	Cr�e un tableau � partir de deux autres tableaux. Les tables � combiner 		    doivent avoir les meme nombre d��l�ments 
	$alpha=array("a","b");
	$beta=array("c","d");
	$omega=array_combine ($alpha,$beta);
	echo "<pre>";
	print_r($omega);
	echo "</pre>"; */
	
	/* array_unique ()
	Supprime les doublons dans un tableau 
	
	$prenoms = array("Pierre", "Paul", "Pierre", "jacques");
		$select=array_unique($prenoms);
		echo "<pre>";
		print_r($select);
		echo "</pre>"; */
	
	/*rsort ( ) 
	Trie un tableau du plus grand au plus petit 

		$prenoms = array("Pierre", "Antoine", "Jean");
		sort($prenoms);
		print_r($prenoms);*/
				
		/*ksort ( ) 
		Trie un tableau associatif dans 1 ordre croissant selon les cl�s

		$Agenom= array("Pierre" =>24, "Paul"=>27, "Jean"=>34);
		ksort($Agenom);
		echo "<pre>";
		print_r($Agenom);
		echo "</pre>";
		
		krsort($Agenom);
		echo "<pre>";
		print_r($Agenom);
		echo "</pre>";
		
		asort($Agenom);
		echo "<pre>";
		print_r($Agenom);
		echo "</pre>";
		
		arsort($Agenom);
		echo "<pre>";
		print_r($Agenom);
		echo "</pre>";*/
		?>						
</body>
</html>