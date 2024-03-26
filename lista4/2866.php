<?php
    
    $c = intval(trim(fgets(STDIN)));
    
    for ($i = 0; $i < $c; $i++) 
    {
        $msg = trim(fgets(STDIN));
        
        $texto_oculto = preg_replace('/[^a-z]/', '', $msg);
        $texto_certo = strrev($texto_oculto);
        
        echo $texto_certo . "\n";
    }

?>
