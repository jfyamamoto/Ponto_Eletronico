<?php
include 'dado_relatorio.php';
include 'conexao.php';
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Relatorio de Horario</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="res/libs/bootswatch/flatly.min.css" rel="stylesheet">
	<link href="res/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="res/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
</head>
    
<body>
    <div class="container">
        
        <div class="row titulo">
            <h1>Relatorio do Ponto Eletrônico</h1>
        </div>

        <!-- Painel de Relatorio -->
        
        <form method="post" class="formulario">
    		<div class="form-group">
    			<h3>Dados do funcionário</h3>
    			<div class="col-sm-4">
    				<h4>Matricula:</h4>
    				<input name="matricula" value="<?php echo $busca['matricula']?>" type='text' class="form-control input-lg"/>
    			</div>
                <div class="col-sm-4">
    				<h4>Nome Completo:</h4>
    				<input name="nome" value="<?php echo $busca['nome']?>" type='text' class="form-control input-lg" />
    			</div>
                <div class="col-sm-4">
                    <h4>Cargo:</h4>
                    <input name="cargo" value="<?php echo $busca['cargo']?>" type='text' class="form-control input-lg"/>
                </div>
            </div>
        
            <div class="form-group">
                <div class="col-sm-3">
                    <h4>Horário de Entrada:</h4>
                    <div class="form-group">
                        <div class='input-group date'>
                            <input name="hr_entrada" value="<?php echo $busca['hr_entrada']?>" type='text' class="form-control input-lg" />
                        </div>
                    </div>
			     </div>
                <div class="col-sm-3">
                    <h4>Horário de Saida:</h4>
                    <div class="form-group">
                        <div class='input-group date'>
                            <input name="hr_saida"  value="<?php echo $busca['hr_saida']?>" type='text' class="form-control input-lg" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4>Horário de Saida (Almoço):</h4>
                    <div class="form-group">
                        <div class='input-group date'>
                            <input name="hr_saida_almoco"  value="<?php echo $busca['hr_saida_almoco']?>" type='text' class="form-control input-lg" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4>Horário de Chegada(Almoço):</h4>
                    <div class="form-group">
                        <div class='input-group date'>
                            <input name="hr_chegada_almoco"  value="<?php echo $busca['hr_chegada_almoco']?>" type='text' class="form-control input-lg" />
                        </div>
                    </div>
                </div>
		  </div>
        <form>
            <div class="col-sm-6">
                <h4>Gerar Grafico:</h4>
                <input type="submit" value="Grafico" class="btn btn-primary btn-block btn-lg"/>
            </div>
            <div class="col-sm-6">
                <h4>Gerar Relatorio:</h4>
                <input type="submit" value="Relatorio" class="btn btn-primary btn-block btn-lg"/>
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