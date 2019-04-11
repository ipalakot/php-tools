<!DOCTYPE html>
<html>
<body>

<?php
	$ts=array(7,-10,13,8,4,-7.2,-12,-3.7,3.5,-9.6,6.5,-1.7,-6.4,7);
	$num = 0;    
    // $array = array(0, 5, 10, 11, 12, 20);

    foreach ($ts as $i) 
                {
                    $smallest[$i] = abs($i - $num);
                }
                    asort($smallest);
                    print key($smallest);

/*function CloseToZero(array $ts)
        {
            for($x=0; $x<=13; $x++)
                if ($ts=-1.7)
                    {
                    print_r ($ts);
                    '<br/>';
                    }
        }
    
    CloseToZero($ts);*/
   
?>

</body>
</html>