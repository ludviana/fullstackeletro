<?php
    $servidor = 'localhost'; 
    $usuario  = 'root';
    $senha    = 'root';
    $banco    = 'lojarecode';

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
    
    if(!$conexao){
        die("A conexão falhou: ".mysqli_connect_error());
    }

?>