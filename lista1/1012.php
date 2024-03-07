<?php
  $v = explode(" ",fgets(STDIN));
  $atr = number_format(($v[0] * $v[2]) /2, 3,".","");
  $arc = number_format( 3.14159 * ($v[2] * $v[2]), 3,".","");
  $atra = number_format((($v[0] + $v[1])*$v[2]) /2, 3,".","");
  $aq = number_format(($v[1] * $v[1]), 3,".","");
  $ar = number_format(($v[0] * $v[1]), 3,".","");
  
  echo "TRIANGULO: ".$atr."\n";
  echo "CIRCULO: ".$arc."\n";
  echo "TRAPEZIO: ".$atra."\n";
  echo "QUADRADO: ".$aq."\n";
  echo "RETANGULO: ".$ar."\n";
?>
