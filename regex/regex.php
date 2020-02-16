<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Questão 3 - Regex
    </title>
  </head>
    <body>

        <h3>Filtro:</h3>

        <form action="" method="post">
            <select type="text" name="filtro" onchange="this.form.submit()">
                <option value="">Selecione...</option>
                <option value="1">Menor preço (Sem escala)</option>
                <option value="2">Menor preço (Com escala)</option>
            </select>
        </form>
        <?php 
            $subject = "Melhor preço sem escalas R$ 1.367(1) 
            Melhor preço com escalas R$ 994 (1) 1 - Incluindo todas as taxas.";

            if($_POST['filtro'] == 1){
                preg_match_all('/sem escalas R\$\s(.*?)\(/', $subject, $matches);
                melhorPreco($matches, "Melhor preço sem escala");
                
            }
            
            if($_POST['filtro'] == 2){
                preg_match_all('/com escalas R\$\s(.*?)\(/', $subject, $matches);
                melhorPreco($matches, "Melhor preço com escala");
            }

            function melhorPreco($matches, $message = ""){
                $matches[1][0] = preg_replace("/[^0-9]/","",$matches[1][0]);
                $price = number_format($matches[1][0], 2, '.', '')  . " - Incluindo todas as taxas.<br>";
                echo "<br>$message: <b>$price</b>";
            }
        ?>
    </body>
</html>
    
