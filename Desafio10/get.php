<?php 
  print_r ($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get</title>
</head>
<body>
  <?php 
    $id = 17;
    $button = "Clique aqui agora";
  ?>
  <a href="get.php?id=<?php echo $id; ?><?php echo $button; ?>">Clique Aqui</a>
</body>
</html>