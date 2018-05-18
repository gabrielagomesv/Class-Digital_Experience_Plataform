<?php include "includes/db.php";
      session_start();?>

<?php 
  $_SESSION['username'] = null;
  $_SESSION['user_password'] = null;
  $_SESSION['role'] = null;

  header('Location: ../index.php');
?>