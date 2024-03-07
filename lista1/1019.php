<?php
  $n = intval(readline());
  
  $h = floor($N/3600); 
  $m = floor(($N%3600)/60);
  $s = floor(($N%3600)%60); 
  
  echo $h.":".$m.":".$s."\n";
?>
