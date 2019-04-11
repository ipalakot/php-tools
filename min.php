<!DOCTYPE html>
<html>
<body>

<?php
	
    function CloseToZero()
        {
          $ts= array(7,-10,13,8,4,-7.2,-12,-3.7,3.5,-9.6,6.5,-1.7,-6.4,7);

         $ts2=array_unique($ts);
         sort($ts2);
         echo"<pre>";
         print_r($ts2);
         echo"</pre>";
        
         foreach ($ts2 as $temper) { 
            if($temper >= 0 ) { 
                echo"<pre>"; 
                print_r($temper);
                echo"</pre>";  


              } 
            }
          }
    CloseToZero();

?>
</body>
</html>