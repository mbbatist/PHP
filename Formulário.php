
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Formulário.php" method="POST"> 
            <!-- form action:para direcionar para tal site quando for submetido.
                 method post para postagem, marcação--> 
            <table border="1">
                <!--table: tabela.
                    border 1: borda de 1 px.-->
                <tr><!-- linha-->
                    <td colspan="2">
                        <!-- td:linha.
                             colspan:juntar duas colunas-->
                        Formúlario
                    </td>
                <tr>
                    <td>
                        Caixa de texto
                    </td>
                    <td>
                        <input type="text" name="nome" size="20" placeholder="Caixa de texto">
                        <!-- campo de caixa de texto precisa do tipo(type),nome(name), e tamanho(size).
                        placeholder:letreiro informal na caixa-->
                    </td>
                </tr>
                <tr>
                    <td>
                        Idade
                    </td>
                    <td>
                        <input type="number" name="idade" size="2" maxlength="3">
                        <!--campo de caixa de numero.
                        maxlength: maximo de caracteres inseridos-->
                    </td>
                </tr>
                <tr>
                    <td>
                        Sexo
                    </td>
                    <td>
                        <input type="radio" name="sexo" value="feminino"> Feminino<br>
                        <input type="radio" name="sexo" value="masculino">Masculino
                        <!-- campo de caixa de marcação, precisa do tipo radio, nome igual para os selecionados para ser escolhido somente um, valores diferentes-->
                    </td>
                </tr>
                <tr>
                    <td>
                        Cidade
                    </td>
                    <td>
                        <select name="cidade">
                            <option value="Araguaína">Araguaína</option>
                            <option value="Araguatins">Araguatins</option>
                            <!-- campo de seleção como tag a ser fechada com option-->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Carros
                    </td>
                    <td>
                        <input type="checkbox" name="carros" value="gol">Gol
                        <input type="checkbox" name="carros" value="camaro">Camaro
                        <!-- caixa de seleção como caixa-->
                    </td>
                </tr>
                <tr>
                    <td>
                        Observações
                    </td>
                    <td>
                        <textarea name="observação" cols="30" rows="3" placeholder="escreva aqui..."></textarea>
                        <!--caixa de texto-->
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="enviar" value="enviar"></td>
                </tr>
                
                
            </table>
        </form>
        <?php
       
        ?>
    </body>
</html>
