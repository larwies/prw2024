<?php

    $x = intval(readline());
    $i=1;
    
    while($i<=$x)
    {
        if($i%2 == 0)
        {
            $i ++;
        }
        else
        {
            echo $i."\n";
            $i++;
        }
    }
    
?>
