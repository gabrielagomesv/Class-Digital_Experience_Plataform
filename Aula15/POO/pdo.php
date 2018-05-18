<?php 
  $connection = new PDO("mysql:dbname=cms; host=localhost", "root", "fiap");
  $stmt = $connection->prepare("SELECT * FROM categoria");

  $stmt->execute();

  $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  foreach($resultado as $row) {
    foreach($row as $key=>$value) {
      echo $key . ": " . $value . "<br>";
    }
  }
  //var_dump ($resultado) --> traz o tipo do dado
?>