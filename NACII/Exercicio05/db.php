<?php
  $connection = mysqli_connect('localhost', 'root', 'fiap', 'cadastro');

  if(!$connection) {
    die('Erro de conexão');
  }
?>