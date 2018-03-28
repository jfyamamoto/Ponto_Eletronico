<?php

    //Validação

    if ((!empty($_POST['hr_entrada'])) && (!empty($_POST['hr_saida'])) && (!empty($_POST['hr_saida_almoco'])) && (!empty($_POST['hr_chegada_almoco']))){

    //Conexao com Banco de Dados

    $host = 'localhost';
    $user = 'root';
    $senha = '0420';
    $bd = 'db_ponto_eletronico';

    $conexao=mysqli_connect($host, $user, $senha, $bd);


    //Parametros do Horario do Funcionario

    $hrEntrada = $_POST['hr_entrada'];
    $hrSaida = $_POST['hr_saida'];
    $hrSaidaAlmoco = $_POST['hr_saida_almoco'];
    $hrChegadaAlmoco = $_POST['hr_chegada_almoco'];
   
    
    //Inserindo dados do Horario de Funcionario no Banco

    $sql = "INSERT INTO tb_expediente (`hr_entrada`, `hr_saida`, `hr_saida_almoco`, `hr_chegada_almoco`) 
    VALUES ('$hrEntrada','$hrSaida', '$hrSaidaAlmoco', '$hrChegadaAlmoco')"; 
     
    $query = mysqli_query($conexao, $sql);

        
    //SCRIPTS DE ALERTA
        
    if($sql == $sql){            //Mensagem de Alerta de Horario do Funcionario
        echo '<script>alert("Horario registrado com sucesso!");
                window.location.href = "relatorio.php";
                </script>';
        
    }else{                   //Mensagem de Alerta de Horario do Funcionario não foi Registrado
        echo '<script>
                alert("Horario não Registrado.");
             </script>';
    }

}else{      //Mensagem de Alerta de campos não preenchidos
        
    echo 
        '<script>
            alert("Todos os campos obrigadorios!");
            window.location.href = "ponto_eletronico_funcionario.php";
        </script>';
}

?>