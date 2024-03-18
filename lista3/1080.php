<?php

    $nm= 0;
    
    for ($i = 1; $i<=100; $i++)
    {
        $n = intval(readline());
        
        if($n > $nm)
        {
            $nm = $n;
            $pe = $i;
        }
    }
    
    echo"$nm\n$pe\n";
    
?>
