<?php
    
    $N = [];
    
    for ($i = 0; $i < 100; $i++) 
    {
        $N[$i] = readline();
    }
    foreach($N as $indice=>$n)
    {
        if ($n <= 10)
        echo "A[$indice] = " . number_format($n, 1, '.', '') . "\n";
    }

?>
