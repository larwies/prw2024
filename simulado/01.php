<?php

  $velocidade = intval(readline());
  $distancia = intval(readline());
  $consumo = intval(readline());
  
  $th = $distancia/$velocidade;
  $tc = $distancia/$consumo;
  
  echo "Total horas: ".number_format($th,2,".","")."\n";
  echo "Total combustível: ".number_format($tc,2,".","")."\n";
  
?>
