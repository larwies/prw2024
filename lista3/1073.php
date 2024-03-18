<?php

    $n = intval(readline());
        
    $i = 1;
    
    while($i <= $n)
    {
        if($i%2 == 0)
        {
            echo $i."^2 = ".$i*$i."\n";
        }
        
            $i ++;
    }

?>
