<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Questão 1 - Equação
    </title>
  </head>
  <body>

    <?php

    /*
      Autora: Bianca Pereira
      Equação de 2º Grau 
    */

      function calculoEquacao($num1 ,$num2, $num3){

        $delta = pow($num2,2) - (4*$num1*$num3);
        if($delta>0){
          $x1 = (-$num2-pow($delta,0.5))/(2*$num1);
          $x2 = (-$num2+pow($delta,0.5))/(2*$num1);

          echo "<b>Teste com Raiz:</b><br> Raíz x1: $x1 <br>". "Raiz x2: $x2";
        }
        else{
          echo "<br>---------------------------<br>";
          echo "<br><b>Teste sem Raiz:</b><br> Não possui raízes";
        }
      }

      //Testes para as duas condições:


      /* Com Raízes
        Atribuindo valores para as variáveis: 
      */
      $num1 = 1;
      $num2 = 5;
      $num3 = 4;

      calculoEquacao($num1 ,$num2, $num3);

      /* Sem Raízes
        Atribuindo valores para as variáveis: 
      */
      $num1 = 2;
      $num2 = 8;
      $num3 = 14;

      calculoEquacao($num1 ,$num2, $num3);
    ?>
  </body>
</html>