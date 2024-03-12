<?php

    $s = floatval (readline());
      
    if($s <= 2000.00)
    {
        echo "Isento"."\n";
    }
    else if($s <= 3000.00)
    {
        $ir = ($s - 2000.00) * 0.08; 
        
        echo "R$ ".number_format($ir,2,".","")."\n";
    }
    else if($s <= 4500.00)
    {
        $ir = 1000.00 * 0.08 + ($s - 3000.00) * 0.18;
        
        echo "R$ ".number_format($ir,2,".","")."\n";
    }
    else if($s > 4500.01)
    {
        $ir = 1000.00 * 0.08 + 1500.00 * 0.18 + ($s - 4500.00) * 0.28; 
        
        echo "R$ ".number_format($ir,2,".","")."\n";
    }
?>
