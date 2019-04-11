<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OPERATIONS SUR LES FICHIERS</title>
</head>
<body>

<H4>OPERATIONS SUR LES FICHIERS</H4>

<?php

/*
	$definition=fopen('definition-php.txt', "r+");
//	fseek($definition,40);
//	fwrite($definition, "Cette définition me semble très technique");	
//	fclose($definition);

// 	echo fgets($definition, 100);
	while (!feof($definition)){
		echo fgets($definition);
	}
		echo"<br/>";
		echo"<br/>";
		
		fclose($definition)*/



/* FGETC

		$fp = fopen('definition-php.txt', 'r');
		if (!$fp) {
		    echo 'Impossible d\'ouvrir le fichier somefile.txt';
		}
		while (false !== ($char = fgetc($fp))) {
		    echo "$char\n";
		} */

/*
// fread()
// Lit un fichier, et le place dans une chaîne

		$filename = "definition-php.txt";
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		echo "arg1 :" .$contents; "br/";
		fclose($handle); */



/* fscanf(handle, format)		
		$file=fopen('definition-php.txt','r');
		while($ligne=fscanf($file,"%s\t%s\t%s\n")) {
		echo "Nombre de Ligne: " .$ligne. "<br/>" ;
		} */ 

// fgetss = Lecture d'un fichier PHP ligne par ligne
/*
	$str = <<<EOD
	 <p>Welcome! Today is the <?php echo(date('jS')); ?> of <?= date('F'); ?>.</p>
	EOD;
		file_put_contents('definition-php.txt', $str);

		$handle = @fopen("definition-php.txt", "r");
		if ($handle) {
		    while (!feof($handle)) {
		        $buffer = fgetss($handle, 4096);
		        echo $buffer;
		    }
		    fclose($handle);
		} */


//  Forcer le téléchargement en utilisant readfile()
/*		$file = 'ipc_1.jpg';

		if (file_exists($file)) {
		    header('Content-Description: File Transfer');
		    header('Content-Type: application/octet-stream');
		    header('Content-Disposition: attachment; filename="'.basename($file).'"');
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($file));
		    readfile($file);
		    exit;
		} */


// LECTURE
// fwrite — Écrit un fichier en mode binaire
/*
		$filename = 'definition-php.txt';
		$somecontent = "Ajout de chaîne dans le fichier\n";

		// Assurons nous que le fichier est accessible en écriture
		if (is_writable($filename)) {
		    // Dans notre exemple, nous ouvrons le fichier $filename en mode d'ajout
		    // Le pointeur de fichier est placé à la fin du fichier
		    // c'est là que $somecontent sera placé
		    if (!$handle = fopen($filename, 'a')) {
		         echo "Impossible d'ouvrir le fichier ($filename)";
		         exit;
		    }

		    // Ecrivons quelque chose dans notre fichier.
		    if (fwrite($handle, $somecontent) === FALSE) {
		        echo "Impossible d'écrire dans le fichier ($filename)";
		        exit;
		    }

		    echo "L'écriture de ($somecontent) dans le fichier ($filename) a réussi";

		    fclose($handle);

		} else {
		    echo "Le fichier $filename n'est pas accessible en écriture.";
		}
	echo "final :" .$filename. "<br/>"; */



// DEPLACEMENT 

// fseek()
/*
		$fp = fopen('definition-php.txt', 'r');

		// lit quelques données
		$data = fgets($fp, 496);

		// retourne au début du fichier
		// identique à rewind($fp);
		fseek($fp, 0); */

//	ftell()
/*		// Ouvre un fichier et y lit quelques données
		$fp = fopen("definition-php.txt", "r");
		$data = fgets($fp, 12);

		// Où en sommes-nous ?
		echo ftell($fp); // 11

		fclose($fp); */

// REWIND
//rewind — Replace le pointeur de fichier au début
		/*
		$handle = fopen('definition-php.txt', 'r+');

			fwrite($handle, 'Really long sentence.');
			rewind($handle);
			fwrite($handle, 'Foo');
			rewind($handle);

			echo fread($handle, filesize('definition-php.txt'));

		fclose($handle); */

//FEOF
//feof — Teste la fin du fichier
/*
		$fd = fopen ("definition-php.txt", "r");
		while (!feof ($fd)) {
		$buffer = fgets($fd, 4096);
		echo $buffer;
		}
		fclose ($fd); */
?>

<H4> TRAVAIL SUR LES REPERTOIRES </H4>

<?php

// GETCWD 
//getcwd — Retourne le dossier de travail courant
/*
		// dossier courant
		echo getcwd() . "\n";

		chdir('C:\xampp\htdocs\training-css');

		// dossier courant
		echo "<br>";
		echo getcwd() . "\n"; */


// scandir — Liste les fichiers et dossiers dans un dossier
		$dir    = 'C:\xampp\htdocs\training-css';
		$files1 = scandir($dir);
		$files2 = scandir($dir, 1);

		print_r($files1);
		print_r($files2);

?>

</body>
</html>