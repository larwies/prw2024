<?php

    list($a, $b, $c) = explode(' ', readline());
      
    if($a < $b + $c and $a > $b - $c)
    {
        $perimetro = $a + $b + $c;
        echo "Perimetro = ".number_format($perimetro,1,".","")."\n";
    }
    else
    {
        $area = (($a + $b) * $c)/2;
        echo "Area = ".number_format($area,1,".","")."\n";
    }
    
?>
