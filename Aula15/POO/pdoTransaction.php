<?php 
  $connection = new PDO("mysql:dbname=cms; host=localhost", "root", "fiap");
  $connection->beginTransaction();

  $stmt = $connection->prepare("DELETE FROM user WHERE user_id = ?");

  $user_id = 4;
  $stmt->bindParam(":ID", $user_id);

  $stmt->execute(array($user_id));

  $erro = false;

  if ($erro == false) {
    $connection->commit();
    echo "Excluido com transaction!"; 
  }else{
    $connection->rollback();  
  }


?>