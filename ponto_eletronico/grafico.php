<?php

include 'phplot/phplot.php';

  //Instanciando a class php lot e mysql

    $plot = new PHPlot();
    $conexao = new mysql();

    //Selecionando os dados da tabela para geração dos gráficos

    $buscar = $conexao->exe("SELECT 'nome', 'cargo' FROM tb_funcionario");

    //Definindo o array.
    $data = array();

    while($ver = $buscar->fetch_array())
    {
        $data[] = array($ver['nome'],$ver['cargo']);
    }

    //Aqui nos temos a propriedades da class phplot, podemos definir a cor dos textos de nosso gráfico
        $plot->SetTextColor('blue');
    #$plot->SetTickLabelColor('red');
        
    //Aqui nos temos a propriedades da class phplot, podemos definir a cor do título de nosso gráfico
        $plot->SetTitleColor('blue');
    #$plot->SetDataLabelColor('red');
   
    //aqui nos definimos a cor da exibição da quantidade de votos, coloquei vermelho
        $plot->SetDataValueLabelColor('red');
    
    //tipo da borda da imagem
        $plot->SetImageBorderType('plain');
   
    //Aqui os definimos qual o tipo de gráfico que nos queremos, se pizza ou barras, ou linhas etc.
        $plot->SetPlotType('bars');
        $plot->SetDataType('text-data');
        $plot->SetDataValues($data);
    
    // Aqui nos definimos o título do gráfico
        $plot->SetTitle("Quantidade real dos votos até o presente momento");

    # Turn off X tick labels and ticks because they don't apply here:
    #$plot->SetXTickLabelPos('none');
    $plot->SetXTickPos('none');

    # Make sure Y=0 is displayed:
    $plot->SetPlotAreaWorld(NULL, 0);
    # Y Tick marks are off, but Y Tick Increment also controls the Y grid lines:
    $plot->SetYTickIncrement(100);

    # Turn on Y data labels:
    $plot->SetYDataLabelPos('plotin');

    # With Y data labels, we don't need Y ticks or their labels, so turn them off.
    #$plot->SetYTickLabelPos('none');
    #$plot->SetYTickPos('none');
    //Gerando o gráfico
    $plot->DrawGraph();


?>