<?php

    $operacaoChar = readline();
    $operacao = 0;
    $matriz = [];
    
    for ($i = 0; $i < 12; $i++)
    
        for ($j = 0; $j < 12; $j++)
            $matriz[$i][$j] = floatval(readline());
    
    for ($i = 0; $i < 12; $i++)
    
        for ($j = 11; $j > 11 - $i; $j--)
            $operacao += $matriz[$i][$j];
            
    if ($operacaoChar == 'M')
        $operacao /= 66;
        
    echo number_format($operacao, 1, '.', '') . "\n";

?>
