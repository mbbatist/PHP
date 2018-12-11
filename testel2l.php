<html>
    <head>
        <title></title>
        <link href="css/cssl2l.css" rel="stylesheet" type="text/css"/>
        </head>
    <body>
        <form action="testel2l.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="black"> Digite o numero de dias de aula: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="coluna" size="2" maxlength="1"> </td>
    </tr>
    <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="black"> Digite o numero de atividades você faz durante a semana: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="linha" size="2" maxlength="2"> </td>
    </tr>
    <tr>
    <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar"> </center></td>
    </tr>
        </table>
        </form>
        <?php
        if(isset($_POST['enviar']))
            {
                $coluna=$_POST['coluna'];
                $linha=$_POST['linha'];
       
                if($linha==1&& $coluna==1){}
                else if($linha==2&&$coluna==2){
        echo '123';}
                else if($linha==3&&$coluna==3){}
                else if($linha==4&&$coluna==4){}
                else if($linha==5&&$coluna==5){}
                else{}
            }
        
        ?>
    </body>
    
</html>