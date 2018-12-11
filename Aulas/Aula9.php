<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Aula9.php"method="POST">
        <table border="1" width="25%" align="center" cellspacing="3" cellspading="5" bgcolor="green">
            <tr>
                <td align="center">Digite o seu nome:</td>
                <td><input type="text" name="nome" size="10"> <br></td>
            </tr>
             <tr>
                <td align="center">Digite a sua idade:</td>
                <td><input type="text" name="idade" size="3" maxlength="3"></td>
            </tr>
             <tr>
                <td colspan="2" align="center"><input type="submit" value="Enviar" name="enviar"</td>
        </table>
        </form>
             
            
        <?php
        if(isset($_POST['enviar']))
        {
             if(!empty($POST['nome']))
             {
                  if(!empty($POST['idade']))             
                   {
                            $nome=$_POST['nome'];
                            $idade=$_POST['idade'];
          
                        echo"<br><center>Seja bem vindo(a) ,<font color='blue' size='5'>".$nome;
            
                        echo"</font><br>Sua idade é:<font color='red' size='5'> ".$idade;
                     
                   }             
                   else
                   {
                        echo"<center><font color='red'>Por Favor,preencha sua idade</font>";
                   }       
             }
            else
            {
                echo"<center><font color='red'>Por Favor,preencha seu nome</font>";
            }
       }
      
        ?>
    </body>
</html>
