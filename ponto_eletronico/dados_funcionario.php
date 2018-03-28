<?php

     //Validação

    if ((!empty($_POST['matricula'])) && (!empty($_POST['nome'])) && (!empty($_POST['cargo']))){

    //Conexao com Banco de Dados

    $host = 'localhost';
    $user = 'root';
    $senha = '0420';
    $bd = 'db_ponto_eletronico';

    $conexao=mysqli_connect($host, $user, $senha, $bd);


    //Parametros do Cadastro de Funcionario

    $recMatricula = $_POST['matricula'];
    $recNome = $_POST['nome'];
    $recCargo = $_POST['cargo'];
    
    //Inserindo dados do Cadastro de Funcionario no Banco

    $sql = "INSERT INTO `tb_funcionario` (`matricula`, `nome`, `cargo`) 
            VALUES ('$recMatricula', '$recNome', '$recCargo')"; 
     
    $query = mysqli_query($conexao, $sql);


        
    //SCRIPTS DE ALERTA
    

    if($sql == $sql){       //Mensagem de Alerta se Funcionario foi Cadastrado
        
        echo '<script>alert("Funcionario cadastrado com sucesso!");
                window.location.href = "ponto_eletronico_funcionario.php";
                </script>';
        
    }else{       //Mensagem de Alerta se Funcionario não foi Cadastrado
        
        echo '<script>
                alert("Funcionario não cadastrado.");
             </script>';
    }

}else{      //Mensagem de Alerta de campos não preenchidos
        
    echo 
        '<script>
            alert("Todos os campos obrigadorios!");
            window.location.href = "cadastro_funcionario.php";
        </script>';
}


?>