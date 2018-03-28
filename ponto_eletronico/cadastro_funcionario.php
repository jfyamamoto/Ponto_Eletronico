<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Controle de Ponto</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="res/libs/bootswatch/flatly.min.css" rel="stylesheet">
	<link href="res/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="res/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
</head>
    
<body>
    <div class="container">
        
        <div class="row titulo">
            <h1>Cadastro</h1>
        </div>
        
            <!-- Painel de Cadastro de Funcionario -->
        
        <form action="dados_funcionario.php" method="post" class="formulario">
    		<div class="form-group">
    			<h3>Dados do funcionário</h3>
    			<div class="col-sm-4">
    				<h4>Matricula:</h4>
    				<input name="matricula" type='text' class="form-control input-lg"/>
    			</div>
                <div class="col-sm-4">
    				<h4>Nome Completo:</h4>
    				<input name="nome" type='text' class="form-control input-lg" />
    			</div>
                <div class="col-sm-4">
                    <h4>Cargo:</h4>
                    <input name="cargo" type='text' class="form-control input-lg"/>
                </div>
    		</div>
            
        <form>
            <div class="col-sm-3">
                <h4>Gravar Funcionario:</h4>
                <input type="submit" value="Gravar" class="btn btn-primary btn-block btn-lg"/>
            </div>   
        </form>
    </form>
</div>

	<div id="box_alertas"></div>

	<script src="res/libs/jquery/jquery.min.js"></script>
	<script src="res/libs/moment/moment-with-locales.js"></script>
	<script src="res/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="res/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    
</body>
</html>
