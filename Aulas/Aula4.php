
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $v1=2480;
        $v2=34;
        //Questão 1:
        $soma=$v1+$v2;             
        $multiplicação=$v1*$v2;              
        $divisão=$v1/$v2;    
        $subtração=$v1-$v2;
        //Questão 2:
        echo"soma=".$soma;
        echo"<br>subtração=".$subtração;
        echo"<br>divisão=".$divisão;
        echo"<br>multiplicação=".$multiplicação;
        //Questão 3:
        $somaimed=$soma;
        $somaimed+=60;
        echo"<br>Soma imediata=".$somaimed;
        //Questão 4:
        $multimed=$somaimed;
        $multimed*=4;
        echo"<br>Multiplicação imediata=".$multimed;
        //Questão 5:
        $subincrem=$subtração;
        $subincrem++;
        echo"<br>Subtração Pós-incrementada=".$subincrem;          
        ?>
        <table bgcolor="#8EE5EE" align="center" border="1" width="30%" height="30%">
            <tr>
                <td colspan="2" bgcolor="#00868B" align="center"><font face="Andy"> Exercício PHP </font> </td>
     
            </tr>
            <tr>
                <td bgcolor="#00C5CD" ><font face="Andy"> Soma</font></td>
                <td>
                <?php
                echo"$soma";
                ?>
                 </td>
            </tr>
            <tr>
                <td bgcolor="#00C5CD"><font face="Andy">Subtração </font></td>
                <td> 
                    <?php
                    echo"$subtração";
                    ?>
                </td>
            </tr>
            <tr>
                <td bgcolor="#00C5CD"><font face="Andy">
                    Divisão </font>
                </td>
                <td>
                    <?php
                    echo"$divisão";
                    ?>
                </td>
            </tr>
            <tr>
                <td bgcolor="#00C5CD"><font face="Andy">
                    Multiplicação </font>
                </td>
                <td>
                    <?php
                    echo"$multiplicação";
                    ?>
                </td>
                    </tr>
                    <tr>
                        <td bgcolor="#00C5CD"><font face="Andy">
                            Soma Imediata </font>
                        </td>
                        <td>
                            <?php
                            echo"$somaimed";
                            ?>
                        </td>
                        </tr>
                        <tr>
                            <td bgcolor="#00C5CD"><font face="Andy">
                                Multiplicação Imediata </font>
                            </td>
                            <td><?php
                            echo"$multimed";
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#00C5CD"><font face="Andy">
                                Subtração pré-incrementada </font>
                            </td>
                            <td>
                                <?php
                                echo"$subincrem";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><font face="Andy"> By:Mariana, bjiim no ombro!!</font></td>
                        </tr>
            
        </table>
    </body>
</html>
