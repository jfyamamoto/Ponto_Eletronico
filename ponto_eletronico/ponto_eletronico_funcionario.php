<?php
    include 'conexao.php';  
?>

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
            <h1>Ponto Eletrônico</h1>
        </div>
    
        <!-- Painel de Controle de Horario -->
        
        <form action="dados_horario.php" method="post" class="formulario">
            <div class="form-group">
                <h3>Controle de Ponto</h3>
            </div>
            
            <div class="form-group">
                <div class="col-sm-3">
                    <h4>Horário de Entrada:</h4>
                    <div class="form-group">
                        <div class='input-group date'>
                            <input name="hr_entrada" type='text' class="form-control input-lg" />
                        </div>
                    </div>
			     </div>
                <div class="col-sm-3">
                    <h4>Horário de Saida:</h4>
                    <div class="form-group">
                        <div class='input-group date'>
                            <input name="hr_saida" type='text' class="form-control input-lg" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4>Horário de Saida (Almoço):</h4>
                    <div class="form-group">
                        <div class='input-group date'>
                            <input name="hr_saida_almoco" type='text' class="form-control input-lg" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4>Horário de Chegada (Almoço):</h4>
                    <div class="form-group">
                        <div class='input-group date'>
                            <input name="hr_chegada_almoco" type='text' class="form-control input-lg" />
                        </div>
                    </div>
                </div>
		  </div>
        <form>
            <div class="col-sm-4">
                <h4>Registrar:</h4>
                <input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg"/>
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