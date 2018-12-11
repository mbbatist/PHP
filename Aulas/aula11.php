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
      for($i;$i<=5;$i++)
      {
          echo"$i...<br/>";
      }
      for($i=5;$i>=1;$i--)
      {
          echo"<br>$i...<br/>";
      }
      for($i=1;$i<=128;$i*=2)
      {
          echo $i."..<br/>";
      }

      ?>
    </body>
</html>
