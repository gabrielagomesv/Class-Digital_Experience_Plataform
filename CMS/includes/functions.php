<?php include "db.php";

  function categories(){
    global  $connection;

    $query = "SELECT * FROM categoria";
    $select_result = mysqli_query($connection, $query); 

    while($row = mysqli_fetch_assoc($select_result)){
      $cat_nome = $row['cat_nome'];
      echo "<li><a href='#'>" . $cat_nome . "</a></li>";
    }
  }

  function posts(){
    
  }
?>