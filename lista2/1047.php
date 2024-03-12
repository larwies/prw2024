<?php

    $e = explode(" ", fgets(STDIN));
    
    $hi = $e[0];
    $mi = $e[1];
    $hf = $e[2];
    $mf = $e[3];
    
    $mi += $hi * 60;
    $mf += $hf * 60;
    
    $t = $mf - $mi;

    if($t <= 0)
        {
            $t += 24 * 60;
        }
        
    $h = number_format(floor($t/60),0,"","");
    $m = $t%60;
    
    echo"O JOGO DUROU ".$h." HORA(S) E ".$m." MINUTO(S)"."\n";
    
?>
