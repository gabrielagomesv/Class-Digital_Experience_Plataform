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

    if(isset($_GET['edit'])){
      $cat_id_get = $_GET['edit'];

      echo "<input type='text' name='cat_nome' class='form-control'>";
      echo "<input type='hidden' name='cat_id' value='". $cat_id_get . "' class='form-control'>";    
      
    }

    if(isset($_POST['editar'])){
      $cat_nome_update = $_POST['cat_nome'];
      $cat_id_post = $_POST['cat_id'];
      
      $updateQuery = "UPDATE categoria SET cat_nome = '$cat_nome_update' WHERE cat_id = $cat_id_post";
      $resultQuery = mysqli_query($connection, $updateQuery); 

      if (!$resultQuery) {
        die("Falha na atualização: " . mysqli_error($connection));
      }else{
        echo "<div class='alert alert-warning' role='alert'>Categoria atualizada!</div>";
      }
    }

  }

  function addPost(){
    global $connection;

    if(isset($_POST['adicionar'])){
      $post_titulo = $_POST['post_titulo'];
      $post_autor = $_POST['post_autor'];
      $post_data = date('d-m-y');
      $post_imagem = $_FILES['post_imagem']['name'];
      $post_imagem_temp = $_FILES['post_imagem']['tmp_name'];
      $post_conteudo = $_POST['post_conteudo'];

      //move_uploaded_file(var temporaria, diretório onde vai ficar a imagem );      
      move_uploaded_file($post_imagem_temp, '../images/' . $post_imagem);
            

      $query = "INSERT INTO posts(post_titulo, post_autor, post_data, post_imagem, post_conteudo) VALUES('$post_titulo', '$post_autor', now(), '$post_imagem', '$post_conteudo')";

      $add_post = mysqli_query($connection, $query);


      if (!$add_post) {
        die('Erro da criação de novo post: ' . mysqli_error($connection));
      }else {
        echo "<div class='alert alert-success' role='alert'>Categoria cadastrado com sucesso!</div>";
      }
    }
  }

?> 