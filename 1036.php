<?php

    list($a, $b, $c) = explode(' ', readline());
    
    $delta = sqrt(($b * $b) - (4 * $a * $c));
    
    if($delta > 0 and $a != 0)
    {
        $x1 = ((-$b + $delta) / (2 * $a));
        $x2 = ((-$b - $delta) / (2 * $a));
        
        echo "R1 = ".number_format($x1,5,".","")."\n";
        echo "R2 = ".number_format($x2,5,".","")."\n";
    }
    else 
    {
        echo "Impossivel calcular\n";
    }
?>