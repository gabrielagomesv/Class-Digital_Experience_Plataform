<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Exercício 02</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h1>Calcular impostos - Exercício 01</h1>
          <hr>
          <?php
            function calculaImposto($valor){
              if($valor < 1200){
                echo "Você é isento de impostos.";
              }elseif($valor > 1201 && $valor < 5000){
                $valorComImpostos = $valor + ($valor * 0.1);
                echo "O valor de impostos a serem pagos é de: " . $valorComImpostos . ". Você foi taxado em 10%.";
              }elseif($valor > 1501 && $valor < 10000){
                $valorComImpostos = $valor + ($valor * 0.15);
                echo "O valor de impostos a serem pagos é de: " . $valorComImpostos . ". Você foi taxado em 15%.";
              }elseif($valor > 10000){
                $valorComImpostos = $valor + ($valor * 0.20);
                echo "O valor de impostos a serem pagos é de: " . $valorComImpostos . ". Você foi taxado em 20%.";
              }
            }

              //Resultado
              calculaImposto(1000); 
          ?>
           
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>




