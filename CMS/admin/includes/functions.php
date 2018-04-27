<?php 

  function listCategoria(){
    global $connection;

    $query = "SELECT * FROM categoria";
    $select_result = mysqli_query($connection, $query); 
  
    while($row = mysqli_fetch_assoc($select_result)){
        $cat_nome = $row['cat_nome'];
        $cat_id = $row['cat_id'];

        echo "<tr>";
        echo "<td>" . $cat_id . "</td>";
        echo "<td>" . $cat_nome . "</td>";
        echo "<td><a href='categorias.php?edit={$cat_id}'>Editar</a></td>";
        echo "<td><a href='categorias.php?delete={$cat_id}'>Apagar</a></td>";
        echo "</tr>";

    }
  }

  function addCategoria(){
    global $connection; 

    if(isset($_POST['adicionar'])){
      $cat_nome = $_POST['cat_nome'];

      if($cat_nome == ''){
        echo "<div class='alert alert-danger' role='alert'>Não é possível gravar uma categoria vazia!</div>";
      }else{
        $query = "INSERT INTO categoria(cat_nome) VALUES('$cat_nome')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
          die('Erro da criação de novo usuário: ' . mysqli_error($connection));
        }else {
          echo "<div class='alert alert-success' role='alert'>Categoria cadastrado com sucesso!</div>";
        }
      }

    }
  }

  function deleteCategoria(){
    global $connection;

    if(isset($_GET['delete'])){
      $cat_id = $_GET['delete'];
      $query = "DELETE FROM categoria WHERE cat_id = $cat_id";

      $resultQuery = mysqli_query($connection, $query);

      if (!$resultQuery) {
        die("Falha na deleção: " . mysqli_error($connection));
      }else{
        echo "<div class='alert alert-warning' role='alert'>Categoria deletada!</div>";
      }
    }
  }

  function editCategoria(){
    global $connection;
    
    $query = "SELECT * FROM categoria";
    $select_result = mysqli_query($connection, $query); 
      
    while($row = mysqli_fetch_assoc($select_result)){
      $cat_nome = $row['cat_nome'];
      $cat_id = $row['cat_id'];

    }
    echo "<input type='text' name='cat_nome' class='form-control'>";

  }

?> 