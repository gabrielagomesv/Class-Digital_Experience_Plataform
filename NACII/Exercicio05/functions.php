<?php include "db.php";

  function create(){
    global $connection;

    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $rg = $_POST['rg'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];

      $query = "INSERT INTO usuario(name, rg, telefone, email) VALUES('$name', '$rg', '$telefone', '$email')";
      $newRegister = mysqli_query($connection, $query);

      if(!$newRegister){
        die("Falha no cadastro: " . mysqli_error($connection));
      }else{
        echo "<div class='alert alert-success' role='alert'>Cadastro realizado com sucesso!</div>";        
      }    
    }
  }

  function read(){
    global $connection;

    $query = "SELECT * FROM usuario";
    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){
        echo "<br>" . $row['name'] ;
    }
  }
  
  function show(){
    global $connection;
  
    $query = "SELECT * FROM usuario";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
  }

  function update(){
    global $connection; 
  
    $query = "SELECT * FROM usuario";
    $result = mysqli_query($connection, $query);

    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $rg = $_POST['rg'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $id = $_POST['id'];

      $updateQuery = "UPDATE usuario SET 
                      name = '$name', 
                      rg = '$rg',
                      telefone = '$telefone',
                      email = '$email'
                      WHERE id = '$id' ";

      $resultQuery = mysqli_query($connection, $updateQuery);

      if (!$resultQuery) {
        die("Falha na atualização: " . mysqli_error($connection));
      }else{
        echo "<div class='alert alert-success' role='alert'>Usuário atualizado com sucesso!</div>";
      }
    }
  }

  function delete(){
    global $connection; 

    $query = "SELECT * FROM usuario";
    $result = mysqli_query($connection, $query);

    if(isset($_POST['submit'])){
      $id = $_POST['id'];

      $updateQuery = "DELETE FROM usuario WHERE id = $id ";

      $resultQuery = mysqli_query($connection, $updateQuery);
      // $query .=    --> concatenar variavel

      if (!$resultQuery) {
        die("Falha na atualização: " . mysqli_error($connection));
      }else{
        echo "<div class='alert alert-warning' role='alert'>Usuário deletado!</div>";
      }
    }
  }

?> 