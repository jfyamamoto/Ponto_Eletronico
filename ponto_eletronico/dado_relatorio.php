<?php

    //Conexao com Banco de Dados

    $host = 'localhost';
    $user = 'root';
    $senha = '0420';
    $bd = 'db_ponto_eletronico';

    $conexao=mysqli_connect($host, $user, $senha, $bd);


    //Fazendo SELECT dados do Banco

    $sql = "SELECT * FROM tb_rl_funcionario_expediente" ;     
    $query = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($query);
    
    $buscaDados = mysqli_fetch_array($query);

?>