<?php include "db.php";

  function categories(){
    global  $connection;

    $query = "SELECT * FROM categoria";
    $select_result = mysqli_query($connection, $query); 

    while($row = mysqli_fetch_assoc($select_result)){
      $categoria_nome = $row['categoria_nome'];
      echo "<li><a href='#'>" . $categoria_nome . "</a></li>";
    }
  }
?>