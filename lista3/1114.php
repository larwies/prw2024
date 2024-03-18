<?php
    
   $i = 1;
   
   while($i == 1)
   {
       $senha = intval(readline());
       
       if($senha == 2002)
       {
           echo "Acesso Permitido\n";
           $i++;
       }
       else 
       {
           echo "Senha Invalida\n";
       }
   }
    
?>
