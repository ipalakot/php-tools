<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>
<body>
    <H2>Premiers essais de contrôle d'identité</H2>
    <?php
      if ((trim(strtolower($nom))==trim(strtolower("Atte")))
          &&(trim(strtolower($prenom))==trim(strtolower("Tom")))
         &&(trim(strtolower($password))==trim(strtolower("Rouge")))) {
      echo "Bienvenue chez vous, Tom Atte...<BR>\n";
    } else {
      // sortie provisoire du mode php (pour écrire du texte html pur)
    ?>
      <HR>
      Veuillez vous identifier SVP:<P>
      <FORM METHOD="post" ACTION="identite.php">
      Nom: <INPUT NAME="nom"><BR>
      Prénom: <INPUT NAME="prenom"><BR>
      Mot de passe: <INPUT TYPE="password" NAME="password"><BR>
      <INPUT TYPE="submit"><BR>
      </FORM>
      <HR>
    <?php
      // retour dans le mode php (pour fermer le "else")
    }
    ?>
		
</body>
</html>