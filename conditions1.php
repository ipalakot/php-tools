<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LES CONDTIONS</title>
</head>

<body>

    <H2> LES CONDITIONS </H2>
    <?php 

    /* IF ELSIF ELSE
    // Test Heure connexion
        $heure_connexion = 14;
        if($heure_connexion < 15 ){
        echo 'Merci les enfants sont encore à l\'école';  
        } */

/* IF ELSIF ELSE
  $a = 10;
  $b = 20;
    if ($a > $b) {
        echo "A est plus grand que B";
    } elseif ($a == $b) {
        echo "A est égal à B";
    } else {
      echo "A est plus petit que B";
    }*/

/* IF ELSIF ELSE

          $note=20;
          if ($note==0){
              echo "Tu es nulle ! ";
            }
          elseif($note==4) {
                echo "Ce n'est pas bon ! ";
                }
          elseif($note==8) {
                echo "Ce n'est pas bon ! ";
                }
           elseif($note==12) {
                echo "Vous avez 12 ! ";
                }
           elseif($note==16) {
                echo "Vous avez 16! ";
                }    
           elseif($note==20) {
                echo "Vous avez 20! ";
                }                     
          else {
          echo "Je n'ai pas de commentaire ! ";
                } */

/* SWITCH BREAK
         $note=10;

          switch($note) {
                case 0:
                    echo "Tu es nul ! ";
                    break;
                case 4:
                    echo "Vous avez 4 ! ";
                    break;                
                case 8:  
                    echo "Vous avez 6 ! ";
                case 12:
                    echo "Tu es nulle ! ";
                    break;
                case 16:
                    echo "Vous avez 16 ! ";
                    break;                
                case 20:  
                    echo "Vous avez 20 ! ";
                    break;
                
                default:
                    echo "je n'ai pas de commentaire";
                    
                } */

/* BOUCLE WHILE 

          $x=1;
          while($x<=10){
            echo"<pre>";
            echo'ceci est le nomnre: ' .$x;
            echo"</pre>";
            $x++;
          } 

//WHILE EXO 2
    $i = 5;
      while ($i <= 10):
        echo $i;
        $i++;
      endwhile; */


/* BOUCLE DO WHILE 
         
          $x=1;

          do {  
                echo"<pre>";
                echo'ceci est le nomnre: ' .$x;
                echo"</pre>";
                $x++;
              } 
          while($x<=10) */

/* BOUCLE FOR

          $x=1;
          for ($x=1; $x<=10; $x++){
            echo"<pre>";
            echo'ceci est le nomnre: ' .$x;
            echo"</pre>";           
          } */

// BOUCLE FOREACH 
/*    
     $sarr = array(1,2,3,4);
          foreach ($sarr as $value) {
            $value = $value*2 ;
            print_r($value);
          }
          foreach ($sarr as $key => $value) {
            echo"$key=>$value";
            print_r($sarr);
          }
*/

/*          $nombre=array(
            "Un" => 1,
            "Deux"=> 2,
            "Trois"=> 3);
          foreach ($nombre as $value) {
            print_r($nombre);          
          }
*/
// BOUCLE FOREACH 
    $family = array(
                    "Ipalakot"=> 44,
                    "Nanette"=>35,
                    "Lauryn"=>15,
                    "Ewen"=>9,
                    "Aaron"=>3);
/*    foreach ($family as $value) {
      echo $value. "<br />" ;
    }
*/                                      //

     foreach ($family as $key => $value) {
       echo 'Nom  : ' .$key. '  / Age:   ' .$value. '<br/>';
     }
      ?>
</body>
</html>