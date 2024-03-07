<?php
  $r = floatval(readline());
  
  $volume = (4.0/3.0) * 3.14159 * (pow($r,3));
  
  echo "VOLUME = ".number_format($volume,3,".","")."\n";
?>
