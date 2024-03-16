<?php

    $c = 0;
    
    while($i < 6)
    {
        $v = floatval(readline());
        
        if($v > 0)
        {
            $c ++;
            $i ++;
        }
        else
        {
            $i ++;
        }
    }
    
    echo $c." valores positivos";
?>
