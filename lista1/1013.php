<?php
  $e = explode (" ",fgets(STDIN));
  $a = floatval($e[0]);
  $b = floatval($e[1]);
  $c = floatval($e[2]);
  
  $maiorab = ($a + $b + abs($a-$b))/2;
  
  $maiorabc = ($maiorab + $c + abs($maiorab - $c))/2;
  
  echo $maiorabc." eh o maior\n";
?>
