<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $camposenha = $_GET['senha'];
    $senha = 1234;
    
    if ($camposenha == $senha)
        {
            echo "Logado com sucesso";
        
            echo "Nome: ". $nome."\n";
            echo "Email: ". $email."\n";
        }
        
    else
        {
            echo "Senha incorreta";
            echo '<a href="entrada.html">Voltar</a>';
        }

?>