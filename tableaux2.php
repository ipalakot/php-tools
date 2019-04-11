<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>
<body>
    <H4>FONCTIONS TABLEAUX</H4>
<?php

// Tableau multidimensionnel 
/*
	$tab = array(
				"Ipalakot"=>array(
									"Prenoms"=> "Georges",
									"Ville"=> "Sens",
									"age"=>44
								),
				"Venalky"=>array(
									"Prenoms"=> "Henry",
									"Ville"=> "Sens",
									"age"=>44
								),
				"Denga"=>array(
									"Prenoms"=> "Georges",
									"Ville"=> "Sens",
									"age"=>44
								)
			);
				
		foreach ($tab as $key => $value) {
			echo "Element  : $key  <br/>";
			foreach ($value as $key2 => $value2) {
				echo"$key2:  ", $value2, "<br/>"; 
			}
		} */

/*
		$prenoms = array('Pierre', 'Paul', 'jacques');
		 $
		prenoms[0]='Pierre';<br>
		$prenoms[1]='Paul';<br>
		$prenoms[2]='Jacques';  
		
			for($x=0; $x<=2; $x++){
				echo $prenoms[$x]. '<br/>';
			}
		
		
		foreach($prenoms as $items){
			echo $items. '</br>';
		}

		$age = array(
			'Pierre'=>24,
			'Paul'=>22,
			'Jacques'=> 'Non Renseigné');
		foreach($age as $valeurs){
		echo $valeurs. '</br>';
		}

		foreach($age as $clef=>$valeurs ){
			echo 'age de ' .$clef. '  est:  ' .$valeurs. '</br>';
				}
		

		$tab=array(
			"un"=>array(
						"riri",
						1=>"fifi",
						2=>'loulou'),
			2=>array(1,2,3),array(
				'un', 
				'deux',
				'trois'));
		echo $tab['un'][0]; // riri
		echo $tab[2][1]; // 2
		echo $tab[3][2]; // trois
		$tab2['un']['deux']='test'; // créé un tableau à deux dimensions Il existe

		class test {
function affiche_hello() {
echo "Hello !";
}
}
$obj=new test;
$obj->affiche_hello();
*/


// Tableau multidimensionnel 
/*
	$tabmulti=array(
					array("ligne 0-colonne 0","ligne 0-colonne 1","ligne 0-colonne 2"),
					array("ligne 1-colonne 0","ligne 1-colonne 1","ligne 1-colonne 2"),
					array("ligne 2-colonne 0","ligne 2-colonne 1","ligne 2-colonne 2"),
					array("ligne 3-colonne 0","ligne 3-colonne 1","ligne 3-colonne 2")
					);
					print_r($tabmulti); */


// Exemple 5-1
			$tabmulti=array(array("ligne 0-colonne 0","ligne 0-colonne 1","ligne 0-colonne 2"),
							array("ligne 1-colonne 0","ligne 1-colonne 1","ligne 1-colonne 2"),
							array("ligne 2-colonne 0","ligne 2-colonne 1","ligne 2-colonne 2"),
							array("ligne 3-colonne 0","ligne 3-colonne 1","ligne 3-colonne 2"));
						
							echo "<h3>Tableau multidimensionnel</h3> 
							<table border='1' width=\"60% \"> 
								<tboby>";
			
									for ($i=0;$i<count($tabmulti);$i++)
										{
											for($j=0;$j<count($tabmulti[$i]);$j++)
												{
													echo "<td><h3>...",$tabmulti[$i][$j],"...</h3></td>";
												}
													echo "</tr>";
										}
						echo " </tbody> </table> ";



// Exemple 5-2. La création de suites
//Suite de nombres de 1 à 10
		$tabnombre= range(1,10);
			print_r($tabnombre);
			echo "<hr>";
//Suite de lettres de a à z avec une boucle
		for($i=97;$i<=122;$i++)
		{
			$tabalpha[$i-96]=chr($i);
		}
			print_r($tabalpha);
			echo "<hr>";
//Suite de lettres de A à M avec range()
		$tabalpha2 = range("A","M");
		print_r($tabalpha2);


// EXPLODE
		$chaine="La cigale et la fourmi";
		$tabmot = explode(" ",$chaine);
		echo"<br/>";
		print_r($tabmot);

		$adresse="machin@wanadoo.fr" ;
		$tabsite=explode("@",$adresse);
		echo"<br/>";
		echo "L'utilisateur est : {$tabsite[0]} et son serveur mail est {$tabsite[1]} ";
		echo"<br/>";
		
// COUNT
// Exemple 5-3. Comptage du nombre de valeurs
//Le tableau $tabdiv contient 6 éléments
//Le tableau $tabdiv contient 11 valeurs
	//Compte du nombre d'éléments
		$tabdiv=array("Bonjour","Web",
								array("1-0","1-1","1-2"),
								1970,
								2009,
								array("3-0","3-1","3-2","3-3"));

		echo "Le tableau \$tabdiv contient ",count($tabdiv)," éléments <br />";
		
		//ou encore: echo "Le tableau \$tabdiv contient ",sizeof($tabdiv)," éléments <br />";
	//Compte du nombre de valeurs
		$nb_val=0;
		for ($i=0;$i<count($tabdiv);$i++)
			{
				if(gettype($tabdiv[$i])=="array")
					{
						$nb_val+=count($tabdiv[$i]);
					}
				else
					{
						$nb_val++;
					}
			}
			echo "Le tableau \$tabdiv contient ",$nb_val," valeurs <br />";



// BOUCLE FOR
// Exemple 5-6. Lecture d’un tableau multidimensionnel indicé à l’aide de la

		//Création du tableau
			$clients = array(array ("Leparc", "Paris", "35"), 
						array("Duroc","Vincennes", "22"),
						array("Denoël","Saint Cloud","47"));
		/*Alternative à la création du même tableau
			$tab1= array("Leparc","Paris","35") ;
			$tab2= array("Duroc","Vincennes","22");
			$tab3= array("Denoël","Saint Cloud","47");
			$clients=array($tab1,$tab2,$tab3); */
		
			echo "<table border=\"1\" width=\"50%\" >";
		
			//En tête du tableau
				echo "<thead><tr> <th> Client </th> <th> Nom </th><th> Ville </th><th> Age </th></tr> </thead>";
			
			//Pied de tableau
				echo "<tfoot> <tr><th> Client </th><th> Nom </th><th> Ville </th><th> Age </th></tr></tfoot>

			<tbody>";
			//Lecture des indices et des valeurs
					for ($i=0;$i<count($clients);$i++)
						{
							echo "<tr><td align=\"center\"><b>$i </b></td>";
							for($j=0;$j<count($clients[$i]);$j++)
								{
									echo "<td><b>",$clients[$i][$j]," </b></td>";
								}
									echo "</tr>";
						}

//Exemple 5-8. Lecture d’un tableau indicé multidimensionnel à l’aide de la
// boucle while
	
			//création du tableau
				$clients = array(array ("Leparc", "Paris", "35"), 
							array("Duroc", "Vincennes", "22"),
							array("Denoël","Saint Cloud","47"));
				
				//Ajout d'un élément
						$clients[7] = array("Duval","Marseille","76");
				
				//création du tableau HTML
						echo "<table border=\"1\" width=\"50%\" ><thead><tr> <th> Client </th><th> Nom
						➥</th><th> Ville </th><th> Age </th></tr></thead> <tfoot> <tr><th> Client </th>
						➥<th> Nom </th><th> Ville </th><th> Age </th></tr></tfoot><tbody>";
			//Lecture des éléments
			$i=0;
				while(isset($clients[$i]))
					{
						echo "<tr><td align=\"center\"><b>$i </b></td>";
							$j=0;
								while(isset($clients[$i][$j]))
									{
										echo "<td><b>",$clients[$i][$j]," </b></td>";
										$j++;
									}
										echo "</tr>";
										$i++;
					}
// Exemple 5-9. Lecture à l’aide de la fonction each()

//******Lecture d'un tableau indicé******
		$montab=array("Paris","London","Brüssel");//indices 0,1,2
			//Ajout d'un élément au tableau
				$montab[9]="Berlin";
			//Lecture des éléments
				reset($montab);
				while($element=each($montab))
					{
						echo "L'élément d'indice $element[0] a la valeur $element[1]<br />";
			//$i++;
					}
						echo "<hr>";
			//******Lecture d'un tableau associatif******
					$montab=array("France"=>"Paris","Great Britain"=>"London","België"=>"Brüssel");
			//Ajout d'un élément au tableau
					$montab["Deutschland"]="Berlin";
			//Lecture des éléments
					reset($montab);
					while($element=each($montab))
					{
					echo "L'élément de clé {$element['key']} a la valeur {$element['value']}<br />";
			//$i++;
		}
?>	
?>
</body>