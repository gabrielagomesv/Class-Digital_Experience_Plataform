<?php include "includes/db.php";
      include "includes/functions.php"; 

?>
    <!-- Header -->
    <?php include "includes/header.php"; ?>
    <!-- Navigation -->
    <?php include "includes/topnavbar.php"; ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <?php 
                global $connection;
                 
                 $query = "SELECT * FROM posts";
                 $result = mysqli_query($connection, $query);
           
                 while($row = mysqli_fetch_assoc($result)){
                   $post_titulo = $row['post_titulo'];
                   $post_autor = $row['post_autor'];
                   $post_data = $row['post_data'];
                   $post_imagem = $row['post_imagem'];
                   $post_conteudo = $row['post_conteudo'];

            ?>
            
            <div class="col-md-8">
                <h1 class="page-header">
                    Posts da semana
                    <small>Resumo de todas as postagens</small>
                </h1>
                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_titulo; ?></a>
                </h2>
                <p class="lead">
                    por <a href="index.php"><?php echo $post_autor; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo date('d/m/Y', strtotime($post_data)); ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_imagem; ?>" alt="">
                <hr>
                <p><?php echo $post_conteudo; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
            </div>

            <?php };  ?>
        
            <!-- Sidebar -->
            <?php include "includes/sidebar.php"; ?>
            
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <?php include "includes/footer.php"; ?>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
