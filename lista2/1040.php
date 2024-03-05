<?php

    list($n1, $n2, $n3, $n4) = explode(' ', readline());
      
      $media = ($n1 * 0.2) + ($n2 * 0.3) + ($n3 * 0.4) + ($n4 * 0.1);
      $media *= 10;
      $media = floor($media);
      $media /= 10;
      
    if($media >= 7.0)
    {
        echo "Media: ".number_format($media,1,".","")."\n";
        echo "Aluno aprovado.\n";
    }
    else if($media < 5.0)
    {
        echo "Media: ".number_format($media,1,".","")."\n";
        echo "Aluno reprovado.\n";
    }
    else if($media >= 5.0 and $media <= 6.9)
    {
        echo "Media: ".number_format($media,1,".","")."\n";
        echo "Aluno em exame.\n";
        
        $ne = floatval (readline());
        
        $nfinal = ($ne + $media) / 2;
        
        if($nfinal >= 5.0)
        {
            echo "Nota do exame: ".number_format($ne,1,".","")."\n";
            echo "Aluno aprovado.\n";
            echo "Media final: ".number_format($nfinal,1,".","")."\n";
        }
        else if($nfinal <= 4.9)
        {
            echo "Nota do exame: ".number_format($ne,1,".","")."\n";
            echo "Aluno reprovado.\n";
            echo "Media final: ".number_format($nfinal,1,".","")."\n";
        }
    }
?>
