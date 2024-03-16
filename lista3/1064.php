<?php

    $i = 0;
    
    while($i <= 6)
    {
        $v = floatval(readline());
        
        if($v > 0)
        {
            $i ++;
            $p ++;
            
            $m += $v;
        }
        else
        {
            $i ++;
        }
    }
    
    $media = $m/$p;
    
    echo $p." valores positivos"."\n";
    echo number_format($media, "1",".","")."\n";
?>
