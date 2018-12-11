<html>
    <head>
        <title>Aula 3</title>
    </head>
    <body>
       <?php
       $x=45;
       echo $x;
       echo "<br>";
       $x -=20;
       $x +=75;
       $y=$x;
       $x *=2;
       $y /=2;
       echo $x;
       echo "<br>";
       echo $y;
       echo "<br>";
       //////////////////////////////////////////////////////////////////////////////////////////
       
       $a=100;
       --$a; //pré decremento: tira um da variavel no mesmo instante
       echo --$a; //irá ser igual 98
       echo "<br>";
       
       $a1=100;
       $a1--; //pós decremento: tira a um da variavel depois de ser impresso
       echo $a1--; //irá ser igual 99
       echo "<br>";
       echo $a1; //irá ser igual a 98
       echo "<br>";
       ///////////////////////////////////////////////////////////////////////////////////////////
       
       $variavel1='Renato';
      echo"Professor ->".$variavel1;
      echo "<br>";
      
      $n1=40;
      $n2=100;
      echo "Pre- incrementado 1 ao valor 40=".++$n1;
      echo "<br>";
      echo "multiplicacao imediata com 2=<font color='blue' size='5'>".$n1 *=2;
      echo "<br>";
      echo"</font><br>Soma ->".$soma=$n2+$n1;
      
       ?>
    </body>
</html>

