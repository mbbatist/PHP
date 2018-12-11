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
        <form action="aula10.php" method="POST">
            <table border="1" align="center">
                <tr>
                    <td colspan="2" align="center">Atividade-1</td>
                    
                </tr>
                <tr>
                    <td>Nome</td>
                    <td><input type="text" name="nome" size="30"</td>
                </tr>
                <tr>
                    <td>Cidade</td>
                            <td><select name="cidade">
                                    <option value="Araguaína">Araguaína</option>
                                    <option value="Goiânia">Goiânia</option>
                                    <option value="Palmas">Palmas</option>
                                    <option value="Outra">Outra</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="Pesquisar" value="Pesquisar"</td>
                   
                </tr>
                <?php
                
                if (isset($_POST['Pesquisar']))
                {  $nome=$_POST['nome'];
                   $cidade=$_POST['cidade'];
                   if($cidade==Palmas)
                   {
                    $P=1;
                    while($P<=45)
                    {
                        echo $P."-$nome você mora em Palmas<br>";
                        $P++;
                    }
                   }
                   else if($cidade==Araguaína)
                   {
                     $A=1;
                     while($A<=55)
                     {
                         echo $A."-$nome você esteve em Araguaína<br>";
                         $A++;
                     }
                   }
                   else if($cidade==Goiânia)
                   {
                       $G=1;
                       while($G<=100)
                       {
                           echo $G."-$nome você irá viajar para Goiânia<br>";
                           $G++;
                       }
                   }
                   else
                       {
                       echo"Esta cidade não foi cadastrada";
                       }
                 
                 
                    
                 }?>
        </form></table></body>
</html>
