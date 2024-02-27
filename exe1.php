<?php
 
 $nome = $_GET['nome'];
 $idade = $_GET['idade'];
 $salario = $_GET['salario'];


 if($salario <= 1412.00)
    {
        $inss = $salario * 0.075;
    }
 else if($salario < 2666.68)
    {
        $inss = $salario * 0.09;
    }
 else if($salario < 4000.03)
    {
        $inss = $salario * 0.12;
    }
 else if( $salario > 4000.03 )
    {
        $inss = $salario * 0.14;
    }


    $bir= $salario - $inss;


 if($bir <= 2259.20 && $idade < 65)
    {
        $irpf = $bir*0;
    }
 else if( $bir <= 2259.20 && $idade >= 65)
    {
        $irpf = $salario * 0 - 0;
    }

 else if($bir <= 2828.65 && $idade < 65)
    {
        $irpf = ($bir * 0.075) - 169.44;
    }
 else if($bir <= 2828.65 && $idade >= 65)
    {
        $irpf = ($bir * 0);
    }
 else if($bir <= 3751.05 && $idade < 65)
    {
        $irpf = ($bir * 0.15) - 381.44;
    }
 else if($bir <= 3751.05 && $idade >= 65)
    {
        $irpf = ($bir * 0);
    }
    else if($bir <= 4664.68 && $idade < 65)
    {
        $irpf = ($bir * 0.225) - 381.44;
    }
 else if($bir <= 4664.68 && $idade >= 65)
    {
        $irpf = ($bir * 0);
    }
    else if($bir > 4664.68  && $idade < 65)
    {
        $irpf = ($bir * 0.275) - 896.00;
    }
 else if($bir > 4664.68  && $idade >= 65)
    {
        $irpf = ($bir * 0);
    }
   
 echo "Valor total do INSS: ".number_format($inss,2,".","")."Valor do total do IRPF: ".number_format($irpf,2,".","");

?>
