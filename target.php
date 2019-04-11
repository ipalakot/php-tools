<!DOCTYPE html>
<html>
<body>

Bienvenue sur ce formulaire <br>

----------------------------------

<?php  
    //echo 'Mr / Mme :  ' .htmlspecialchars($_POST["prenom"]) . '';//htmlspecialchars conserve les codes html dans le formulaire
    //echo 'Mr / Mme :  ' .strip_tags($_POST["prenom"]) . ''; //strip_tags supprimes les codes html dans le formulaire
    //echo 'Mr / Mme :  ' .strm($_POST["prenom"]) . '';
    //echo 'Mr / Mme :  ' .stripslashes($_POST["prenom"]) . '';
    

// SECURISATION DU FORMULAIRE
/*
    $nom="";
    $prenom="";
    $pseudo="";

    function securisation($donnees) {
            $donnees=trim($donnees);
            $donnees=stripslashes($donnees);
            $donnees=strip_tags($donnees);
            return $donnees;
        }

        $prenom=securisation($_POST['prenom']);
        $nom=securisation($_POST['nom']);
        $pseudo=securisation($_POST['pseudo']);

     echo 'Prenoms :  ' .$prenom. '<br/>';
     echo 'Noms :     ' .$nom.    '<br/>';
     echo 'pseudo :   ' .$pseudo. '<br/>';
*/
  
     echo'<br/>';
     echo'<br/>';
     echo 'Mr / Mme :  ' .htmlspecialchars($_POST["prenom"]). '<br/>';
     echo'- Noms :  ', (string)$_POST['nom'], '<br/>';
      echo'- Pseudo :  ', (string)$_POST['pseudo'], '<br/>';

    ?>



</p>
</body>
</html>