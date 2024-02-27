<?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $salario = $_GET['salario'];
    
    if ($idade <= 65)
    {
        if ($salario <= 1302.00)
        {
            $salINSS = $salario - (($salario/100) * 7.5);
        
            echo "Salário final: ".  $salINSS."\n";
        }

        if ($salario <= 2571.29)
        {
            $salINSS = $salario - (($salario/100) * 9);
        
            echo "Salário final: ".  $salINSS."\n";
        }    

        if ($salario <= 3856.94)
        {
            $salINSS = $salario - (($salario/100) * 12);
        
            echo "Salário final: ".  $salINSS."\n";
        }
        
        else
        {
            $salario - (($salario/100) * 14);
        
            echo "Salário final: ".  $salINSS."\n";
        }

    }
    
        if ($salario <= 1903.98)
        {
            echo "Salário final: ". $salIRRF."\n";
        }

        if ($salario <= 2826.65)
        {
            $salIRRF = ($salario - 142.80) - (($salario/100) * 7.5);
            echo "Salário final: ". $salIRRF."\n";
        }

        if ($salario <= 3751.05)
        {
            $salIRRF = ($salario - 354.80) - (($salario/100) * 15);
            echo "Salário final: ". $salIRRF."\n";
        }

        if ($salario <= 4664.68)
        {
            $salIRRF = ($salario - 636.13) - (($salario/100) * 22.5);
            echo "Salário final: ". $salIRRF."\n";
        }

        else
        {
            $salIRRF = ($salario - 869.36) - (($salario/100) * 27.5);
            echo "Salário final: ". $salIRRF."\n";
        }
?>