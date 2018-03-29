<?php
    include 'conexao.php';

     //Validação

    if ((!empty($_POST['matricula'])) && (!empty($_POST['nome'])) && (!empty($_POST['idade'])) && (!empty($_POST['telefone'])) && (!empty($_POST['cargo']))){

    
    //Parametros do Cadastro de Funcionario

    $recMatricula = $_POST['matricula'];
    $recNome = $_POST['nome'];
    $recIdade = $_POST['idade'];
    $recTelefone = $_POST['telefone'];    
    $recCargo = $_POST['cargo'];
        
        
    
    //Inserindo dados do Cadastro de Funcionario no Banco

    $sql = "INSERT INTO tb_funcionario (`matricula`, `nome`, `idade`, `telefone`, `cargo`) 
            VALUES ('$recMatricula', '$recNome', '$recIdade', '$recTelefone','$recCargo')"; 
     
    $query = mysqli_query($conexao, $sql);

        
    //SCRIPTS DE ALERTA
    

    if($sql){       //Mensagem de Alerta se Funcionario foi Cadastrado
        
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
            alert("Todos os campos são obrigadorios!");
            window.location.href = "cadastro_funcionario.php";
        </script>';
}


?>