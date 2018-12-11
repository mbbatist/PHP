<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        SetFileFormat("png");
        $grafico->SetTitle("Gráfico de exemplo");
$grafico->SetXTitle("Eixo X");
$grafico->SetYTitle("Eixo Y");
$dados = array( array('Janeiro', 10), array('Fevereiro', 5), array('Março', 4),
    array('Abril', 8), array('Maio', 7), array('Junho', 5) );

$grafico->SetDataValues($dados);


$grafico->DrawGraph();
?>
    </body>
</html>
