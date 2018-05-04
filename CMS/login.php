<?php include "includes/db.php";
      session_start();?>

<?php 
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];

    $username = mysqli_real_escape_string($connection, $username);
    $user_password = mysqli_real_escape_string($connection, $user_password);

    $query = "SELECT * FROM usuario WHERE username ='$username'";
    $select_usuario = mysqli_query($connection, $query); 

    while($row = mysqli_fetch_assoc($select_usuario)){
      $db_id = $row['user_id'];
      $db_user = $row['username']; 
      $db_password = $row['user_password'];
      $db_role = $row['user_role'];
    }

    if($username !== $db_user && $user_password !== $db_password){
      header('Location: ./index.php');
    }elseif($username == $db_user && $user_password == $db_password){
      $_SESSION['username'] = $db_user;
      $_SESSION['user_password'] = $db_password;
      $_SESSION['user_role'] = $db_role;
      
      header('Location: ./admin');
    }else{
      header('Location: ./index.php');
    }
  }
?>