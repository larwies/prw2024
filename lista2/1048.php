
<?php

    $s = floatval (readline());
      
    if($s <= 400.00)
    {
        $r = ($s * 15)/100;
        $ns = $s + $r;
        
        echo "Novo salario: ".number_format($ns,2,".","")."\n";
        echo "Reajuste ganho: ".number_format($r,2,".","")."\n";
        echo "Em percentual: 15 %\n";
    }
    else if($s <= 800.00)
    {
        $r = ($s * 12)/100;
        $ns = $s + $r;
        
        echo "Novo salario: ".number_format($ns,2,".","")."\n";
        echo "Reajuste ganho: ".number_format($r,2,".","")."\n";
        echo "Em percentual: 12 %\n";
    }
    else if($s <= 1200.00)
    {
        $r = ($s * 10)/100;
        $ns = $s + $r;
        
        echo "Novo salario: ".number_format($ns,2,".","")."\n";
        echo "Reajuste ganho: ".number_format($r,2,".","")."\n";
        echo "Em percentual: 10 %\n";
    }
    else if($s <= 2000.00)
    {
        $r = ($s * 7)/100;
        $ns = $s + $r;
        
        echo "Novo salario: ".number_format($ns,2,".","")."\n";
        echo "Reajuste ganho: ".number_format($r,2,".","")."\n";
        echo "Em percentual: 7 %\n";
    }
    else if($s > 2000.01)
    {
        $r = ($s * 4)/100;
        $ns = $s + $r;
        
        echo "Novo salario: ".number_format($ns,2,".","")."\n";
        echo "Reajuste ganho: ".number_format($r,2,".","")."\n";
        echo "Em percentual: 4 %\n";
    }
?>
