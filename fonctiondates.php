<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>
<body>
    <H4>FONCTIONS TABLEAUX</H4>
   <?php
   		
		echo date("d/m/Y"); // 06/01/2004
   		/*time() � 
		Retourne le timestamp UNIX(1/1/1970) - actuel 
		echo time(); */
		
		/*Date()
		Formate une date/heure locale */
		
	//	Formate une date/heure locale
	/*	d = Jour du mois, sur deux chiffres (avec un z�ro initial) 01 � 31
	/*	m = Mois au format num�rique, avec z�ros initiaux 01 � 12
	/*	n = Mois sans les z�ros initiaux 1 � 12
	/*	Y = Ann�e sur 4 chiffres Exemples : 1999 ou 2003
	/*	l = ('L' minuscule) Jour de la semaine, textuel, version longue, esamedi
	/*	N = jour de la semaine  1 (pour Lundi) � 7 (pour Dimanche)
	/*	H = Heure, au format 24h, avec les z�ros initiaux 00 � 23
	/*	i = Minutes avec les z�ros initiaux 00 � 59
	/*	s = Secondes, avec z�ros initiaux 00 � 59 */
		/*
		echo 'Nous sommes le :  ' .date("d/m/Y").	'</br>';
		echo'Aujourd\'hui c\'est : ' .date("l"). '<br>';
		echo 'Il est : ' .date("h:i:s"); */
	
	//CONVERTION DE DATE EN FRANCAIS
		/*
		$jour=array(
					"",
					"Lundi",
					"Mardi",
					"Mercredi",
					"Jeudi",
					"Vendredi",
					"Samedi",
					"Dimanche");
		$mois=array(
					"",
					"Janvier",
					"Fevrier",
					"Mars",
					"Avril",
					"May",
					"Juin",
					"Juillet",
					"Aout",
					"Septembre",
					"Octobre",
					"Novembre",
					"decembre");
		$datefr= $jour[date("N")].' ' .date("d"). ' ' .$mois[date("n")]. ' ' .date("Y");
		echo 'Nous sommes le : ' .$datefr; */

	//SETLOCAL : une autre mani�re de convertir les dates en fran�ais
		/*
		setlocale(LC_TIME, 'fr-FR');
		echo 'Nous sommes :' .strftime("%A %d %B %Y"). '<br/>';
		echo 'il est  actuellement :' .strftime("%H : %M : %S"). '<br/>';*/


	// checkdate �  Valide une date gr�gorienne*/
		/* 
		$date1=checkdate(12,11,2014);
		$date2=checkdate(13,11,2014);
		$date3=checkdate(01,23,-100);
		if($date1){
			echo "la date  :   "; 
			echo($date1);
			echo "  est valide <br/>"; 
			}
			else {
				 echo "la date nest pas valide";
				 }
				 
		if($date2){
			echo "la date 2 est valide <br/>";
			}
			else {
				 echo "la date 2 nest pas valide <br/>";
				 }
		if($date3){
			echo "la date 3 est valide <br/>";
			}
			else {
				 echo "la date 3 nest pas valide <br/>";
				 } */
				 
// getdate - Retourne la date/heure

      echo "<pre>";
	  print_r(getdate());
	  echo "</pre>"; 
	  
	  echo "<pre>";
	  print_r(getdate(1));
	  echo "</pre>"; 
	  	
	?>						
</body>
</html>