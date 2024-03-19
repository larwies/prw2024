<?php

    while($n = fgets(STDIN))
    {
        $num_ast = 1;
        $pos = ceil ($n / 2);
        
        for($i = 1; $i <= ceil ($n / 2); $i++)
        {
            $linha = str_pad ("", $pos - 1, " ", STR_PAD_LEFT);
            $linha = str_pad ($linha, $pos - 1 + $num_ast, "*", STR_PAD_RIGHT);
            
            echo $linha."\n";
            
            $pos--;
            $num_ast = $num_ast + 2;
        }
        
        $meio = ceil(($num_ast - 2)/2);
        
        $linha = str_pad ("", $meio - 1, " ", STR_PAD_LEFT);
        $linha = str_pad ($linha, $meio - 1 + 1, "*", STR_PAD_RIGHT);
        
        echo $linha."\n";
        
        $linha = str_pad ("", $meio - 2, " ", STR_PAD_LEFT);
        $linha = str_pad ($linha, $meio - 2 + 3, "*", STR_PAD_RIGHT);
        
        echo $linha."\n\n";
    }

?>
