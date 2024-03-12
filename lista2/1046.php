<?php

    $h = explode(" ", fgets(STDIN));
    
    $hi = $h[0];
    $hf = $h[1];
    
    $duracao = $hf - $hi;
    
    if($duracao <= 0)
    {
        $duracao += 24;
    }
    
     echo "O JOGO DUROU ".$duracao." HORA(S)\n"
     
?>
