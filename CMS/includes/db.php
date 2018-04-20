<?php 
  $hostname = 'localhost';
  $user = 'root';
  $password = 'fiap';
  $db_name = 'cms';

  $connection = mysqli_connect($hostname, $user, $password, $db_name);

  if(!$connection) {
    die('Erro de conexão');
  }
?>