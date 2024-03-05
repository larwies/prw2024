<?php

    list($a, $b, $c, $d) = explode(' ', readline());
    
    if($b > $c and $d > $a and $c+$d > $a+$b and $c >= 0 and $d >= 0 and $a % 2 == 0)
    {
        echo " Valores aceitos\n";
    }
    else 
    {
        echo " Valores nao aceitos\n";
    }
?>