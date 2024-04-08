<?php

    $fib = [0, 1];
    $n1 = 0;
    $n2 = 1;
    
    for ($i = 0; $i < 100; $i++) 
    {
        array_push($fib, $n1 + $n2);
        
        $moderador = $n1 + $n2;
        $n1 = $n2;
        $n2 = $moderador;
    }
    
    $N = intval(readline());
    $entrada = [];
    
    for ($i = 0; $i < $N; $i++)
        $entrada[] = intval(readline());
        
    foreach ($entrada as $numero)
        echo "Fib($numero) = " . $fib[$numero] . "\n";

?>
