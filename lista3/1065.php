<?php

    $p = 0;
    
    while($i < 5)
    {
        $v = floatval(readline());
        
        if($v%2 == 0)
        {
            $p ++;
            $i ++;
        
        }
        else
        {
            $i ++;
        }
    }
    
    echo $p." valores pares"."\n";

?>
