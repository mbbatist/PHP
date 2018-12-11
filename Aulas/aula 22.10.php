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
       <form action="aula12.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite seu nome: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="nome" size="10"> </td>
    </tr>
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">  Digite o salário:  </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="salario" size="3">  </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar"> </center></td>
      
    </tr>
       </table>
        </form>
        <?php
       if(isset($_POST['enviar']))
       {
           $a=$_POST['salario'];
           switch($a){
               case 0:
                   echo ("a é igual a 0");
                   break;
               case 1:
                   echo ("a é igual a 1");
                   break;
               case 2:
                   echo("a é igual a 2");
                   break;
               default:
                   echo("a é diferente de 0,1,2");
                   break;
                       }
       }
        ?>
    </body>
</html>
