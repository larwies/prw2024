<?php
 $n = intval(readline());
 $h = intval(readline());
 $v = floatval(readline());
 
 $salario = $h * $v;
 
 echo "NUMBER = ".$n."\n";
 echo "SALARY = U$ ".number_format($salario,2,".","")."\n";
?>
