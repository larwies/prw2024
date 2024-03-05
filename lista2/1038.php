<?php

    list($c, $q) = explode(' ', readline());
      
    if($c == 1)
    {
        $total = $q * 4.00;
        
        echo "Total: R$ ".number_format($total,2,".","")."\n";
        
    }
    else if($c == 2)
    {
        $total = $q * 4.50;
        
        echo "Total: R$ ".number_format($total,2,".","")."\n";
        
    }
    else if($c == 3)
    {
        $total = $q * 5.00;
        
        echo "Total: R$ ".number_format($total,2,".","")."\n";
        
    }
    else if($c == 4)
    {
        $total = $q * 2.00;
        
        echo "Total: R$ ".number_format($total,2,".","")."\n";
        
    }
    else if($c == 5)
    {
        $total = $q * 1.50;
        
        echo "Total: R$ ".number_format($total,2,".","")."\n";
        
    }
?>