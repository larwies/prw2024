<?php

    list($a, $b) = explode(' ', readline());
      
    if($a % $b == 0 or $b % $a == 0)
    {
        echo "Sao Multiplos"."\n";
    }
    else
    {
        echo "Nao sao Multiplos"."\n";
    }
    
?>
