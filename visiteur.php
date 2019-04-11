<!DOCTYPE html>
<head>
	<title>CLASS ET OBJET</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
		include_once('visiteur.class.php');

		$visiteur1 = new Visiteur;
		$visiteur2 = new Visiteur;

		$visiteur1->set_prenom('Ipalakot');
		$visiteur2->set_prenom('MAME NETUS');

		echo 'Bonjour M. ' . $visiteur1->get_prenom(). '<br/>';
		echo 'Bonjour Mme ' . $visiteur2->get_prenom(). '<br/>';
		
	?>

</body>