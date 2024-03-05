<?php

    $a = explode(" ",fgets(STDIN));
    $b = explode(" ",fgets(STDIN));
    $c = explode(" ",fgets(STDIN));
    $d = explode(" ",fgets(STDIN));
    
    if($b > $c and $d > $a and $c+$d > $a+$b and $c >= 0 and $d >= 0 and $a % 2 == 0)
    {
        echo " Valores aceitos\n";
    }
    else 
    {
        echo " Valores nao aceitos\n";
    }
?>