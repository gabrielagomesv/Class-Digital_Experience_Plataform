<?php

$connection = new PDO("mysql:dbname=cms; host=localhost", "root", "fiap");
$stmt = $connection->prepare("INSERT INTO user(username, user_password, user_role, user_nome) VALUES(:USER, :PASSWORD, :ROLE, :NOME)");

$user = "tesJGHJGHte";
$user_password = "123";
$user_role = "adGJHJGHmin";
$user_nome = 'Teste';


$stmt->execute();

echo "Incluido!";
?>