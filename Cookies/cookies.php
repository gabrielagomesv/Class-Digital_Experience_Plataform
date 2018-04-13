<?php 
  //define o cookie
  $nome = 'NomeDoCookie'; 
  $valor = 100;
  $expira = time() + (31600000);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies Php</title>
  </head>
  <body>
    <?php 
      if(isset($_COOKIE['NomeDoCookie'])){
        echo "Já tem. Recuperado! <br>";
        echo "<img src='cookie.gif' alt=''>";
      }else{
        echo "Não tem. Cookie criado!";
        setcookie($nome, $valor, $expira);
      }     
    ?>
  </body>
</html>