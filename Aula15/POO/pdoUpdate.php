<?php 
  $connection = new PDO("mysql:dbname=cms; host=localhost", "root", "fiap");
  $stmt = $connection->prepare("UPDATE user SET username = :USER, user_password = :PASSWORD, user_role = :ROLE, user_nome = :NOME WHERE user_id = :ID");

  $user_id = 3;
  $user = "teste";
  $user_password = "123";
  $user_role = "admin";
  $user_nome = 'Testeblaaaaaaaaghjghjghaaaaaaaa';

  $stmt->bindParam(":ID", $user_id);
  $stmt->bindParam(":USER", $user);
  $stmt->bindParam(":PASSWORD", $user_password);
  $stmt->bindParam(":ROLE", $user_role);
  $stmt->bindParam(":NOME", $user_nome);

  $stmt->execute();

  echo "Atualizado!";
?>