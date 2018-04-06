<?php 
function calculaMedia(){

  if(isset($_GET['enviar'])){
    $nome = $_GET['nome'];
    $disciplina = $_GET['disciplina'];
    $nac = $_GET['nac'];
    $ps = $_GET['ps'];
    $am = $_GET['am'];
    
    $calcula = ($nac * 0.2) + ($am * 0.3) + ($ps * 0.5);

    echo "<div class='alert alert-success'>" . $nome . " sua média é " . $calcula . " em " . $disciplina . "</div>"; 
  }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
      <h1>Desafio 10 - Boletim</h1>
        <form action="calculaMediaView.php" method="get">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">   
          </div>  
                
          <div class="form-group">
            <label>Disciplina</label>
            <input type="text" name="disciplina" class="form-control">   
          </div>     

          <div class="form-group">
            <label>NAC</label>
            <input type="text" name="nac" class="form-control">   
          </div>   
          
          <div class="form-group">
            <label>PS</label>
            <input type="text" name="ps" class="form-control">   
          </div>  
          
          <div class="form-group">
            <label>AM</label>
            <input type="text" name="am" class="form-control">   
          </div>    

          <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">  
          <br> 
          <br>        
            <?php    
              calculaMedia();
            ?>
        </form>
      </div>    
    </div>
  </div>
</body>
</html>

