<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variáveis</title>
    </head>
    <body>
        <h1>VARIÁVEIS</h1>
        <div>
        <?php
            #Operadores matemáticos 
            /*
            SOMA = +
            SUBTRAÇÃO = - 
            MULTIPLICAÇÃO = *
            DIVISÃO = /
            PONTENCIAÇÃO = ^
            */

            

            #Declaração de variáveis do tipo number
            echo("<br>VALORES E MÉDIA<br>");
            $nota1 = 7;
            $nota2 = 7;
            $media = (($nota1 + $nota2)/2);

            echo("A primeira nota foi $nota1 <br>");
            echo("A segunda nota foi $nota2 <br>");
            echo("A média final foi $media <br>");
            $resultado = ($media >= 7) ? "APROVADO" : "REPROVADO";
            echo("O aluno está ".$resultado);

            #Declaração de variáveis do tipo string
            echo("<br><br>CONCATENAÇÃO");
            $nome = "Guilherme";
            $sobrenome = "Carvalho";
            $nickname = "Gui";
            $anoNasc = 2003;
            echo("<br>Meu nome é $nome $sobrenome e meu apelido é $nickname<br> Eu tenho ".(2023 - $anoNasc)." anos de idade"); # .  usado como concatenação, para poder realizar um cálculo
            
            #funções
            echo("<br><br>FUNÇÕES<br>");
            $quadrado = 25;
            echo("O quadrado de 25 é: ". sqrt($quadrado));

            #IF
            echo("<br><br>CONTROLE DE VALIDAÇÃO<br>");
            $valor1 = 10;
            $valor2 = 11;

            if($valor2 > $valor1){
                echo("Valor 2 é maior que o valor 1");
            }else{
                echo("Valor 1 é maior que o valor 2");
            }

            #if simples em apenas 1 linha
            $valorResultado = ($valor1 > $valor2)? "<br> valor 1 é maior" : "<br> valor 2 é maior";
            echo($valorResultado);

            /*
            CONDICIONAIS 
            IGUALDADE ==
            DIFERENÇA !=
            MAIOR QUE >
            MENOR QUE <
            MAIOR IGUAL >=
            MENOR IGUAL <=
            EQUIVALENTE ===
            && and/e
            || ou/or
            */
            $n1 = 1;
            $n2 = 1;
            $valorResult = ($n1 === $n2)? "<br><br>  VALOR 1 É IDÊNTICO AO VALOR 2" : "<br> <br> VALORES DIFERENTES";
            echo($valorResult);
            

        ?>
        </div>
    </body>
</html>