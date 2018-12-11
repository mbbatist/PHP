<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //exemplo1 de IF:
        $nome="Joao";
        
        $x=$nome;
        
        if($x=="Joao")
        {
            echo" A variavel tem o nome $x<BR>";
        }
        else
        { echo"O nome não é Joao";
        }
        //exemplo2 de IF:
        $nome="Maria";
        
        $x=$nome;
        
        if($x=="Joao")
        {
            echo" A variavel tem o nome $x<BR>";
        }
        else
        { echo"O nome não é Joao";
        }
        //exemplo3 de IF:
        $valor1=4;
        $valor2=6;
        $resultado=$valor1+5;
        if($resultado>="8")
        {
            echo"<center> Verdadeiro </center>";
        }
        else
        { echo"<center> Falso </center>";
        }
        //exemplo4 de IF:
        $valor1=2;
        $valor2=6;
        $resultado=$valor1+5;
        if($resultado>="8")
        {
            echo"<center> Verdadeiro </center>";
        }
        else
        { echo"<center> Falso </center>";
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                                  //Exercício//
        $produto="blusa";
        $v1="30";
        $v2="27";
        
        $multiplicaçao=$v1*$v2;
        $resultado1=$multiplicaçao;
        
        if($resultado1>=500)
        { echo"<font color=blue><center>$produto,tem o valor maior ou igual a 500</center></font>";}
        else
        { echo"<font color=red><center>$produto, tem um valor inferior a 500</center></font>";}
        ////////////////////////////////////////////////////////////////////////////////////////
                                      //Exercício//
        $x=30;
        $y=27;
        $z=8;
        if($x>10&&$y<=5&&$z==7)
        { echo"<font color=blue> VERDADEIRO</font>";}
        else
        {echo"<font color=red>FALSO</font>";}
        ?>
        
        
    </body>
</html>
