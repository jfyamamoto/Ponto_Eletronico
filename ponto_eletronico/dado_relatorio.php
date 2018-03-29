<?php
    include 'conexao.php';

    //Fazendo SELECT dados do Banco

    $sql = ("SELECT `tf.matricula`, `tf.nome`, `tf.cargo`, `te.hr_entrada`, `te.hr_saida`, `te.hr_saida_almoco`, `te.hr_chegada_almoco` FROM tb_funcionario tf  RIGHT JOIN tb_expediente te ON `tf.matricula` = `te.matricula`");    

   
    $query = mysqli_query($conexao, $sql); 

    
    while($busca = mysqli_fetch_array($query)){
        
        $recMatricula = $busca['matricula'];
        $recNome = $busca['nome'];
        $recCargo = $busca['cargo'];
        $hrEntrada = $busca['hr_entrada'];
        $hrSaida = $busca['hr_saida'];
        $hrSaidaAlmoco = $busca['hr_saida_almoco'];
        $hrChegadaAlmoco = $busca['hr_chegada_almoco'];
    }
            
?>