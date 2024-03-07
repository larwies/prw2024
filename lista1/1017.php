<?php
  $t = intval(readline());
  $v = intval(readline());
  
  $gasto = number_format(($t*$v)/12,3,".","");
  
  echo $gasto."\n"
?>
