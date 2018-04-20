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
        echo "</tr>";

    }
  }

  function addCategoria(){
    global $connection; 

    if(isset($_POST['adicionar'])){
      $cat_nome = $_POST['cat_nome'];

      $query = "INSERT INTO categoria(cat_nome) VALUES('$cat_nome')";

      $result = mysqli_query($connection, $query);

      if (!$result) {
        die('Erro da criação de novo usuário: ' . mysqli_error($connection));
      }else {
        echo "<div class='alert alert-success' role='alert'>Categoria cadastrado com sucesso!</div>";
      }

    }
  }

?> 