<?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $salario = $_GET['salario'];
    
    if ($idade <= 65)
    {
        if ($salario <= 1302.00)
        {
            $salINSS = $salario - (($salario/100) * 7.5);
        }

        if ($salario <= 2571.29)
        {
            $salINSS = $salario - (($salario/100) * 9);
        }    

        if ($salario <= 3856.94)
        {
            $salINSS = $salario - (($salario/100) * 12);
        }
        
        else
        {
            $salario - (($salario/100) * 14);
        }

    }
    
        if ($salario <= 1903.98)
        {
            $salIRRF = $salario;
        }

        if ($salario <= 2826.65)
        {
            $salIRRF = ($salario - 142.80) - (($salario/100) * 7.5);
        }

        if ($salario <= 3751.05)
        {
            $salIRRF = ($salario - 354.80) - (($salario/100) * 15);
        }

        if ($salario <= 4664.68)
        {
            $salIRRF = ($salario - 636.13) - (($salario/100) * 22.5);
        }

        else
        {
            $salIRRF = ($salario - 869.36) - (($salario/100) * 27.5);
        }

         echo "Total a pagar INSS: ".number_format($salINSS,2,".","")." IRPF: ".number_format($salIRRF,2,".","");


?>
