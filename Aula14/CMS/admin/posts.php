<!DOCTYPE html>
<html lang="en">

<?php include "../admin/includes/header.php";
      include "../admin/includes/functions.php";
 ?>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/topnavbar.php" ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">          
                        <h1 class="page-header">Ver Posts</h1>
                        <table class="table table-bodered">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Título</th>
                              <th scope="col">Autor</th>
                              <th scope="col">Imagem</th>
                              <th scope="col">Data da postagem</th>
                              <th scope="col">Corpo do texto</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                              global $connection;

                              $query = "SELECT * FROM posts";
                              $result = mysqli_query($connection, $query);

                              while($row = mysqli_fetch_assoc($result)){
                                $post_id = $row['post_id'];
                                $post_titulo = $row['post_titulo'];
                                $post_autor = $row['post_autor'];
                                $post_data = $row['post_data'];
                                $post_imagem = $row['post_imagem'];
                                $post_conteudo = $row['post_conteudo'];           
                            ?>
                            <tr>    
                              <td><?php echo $post_id ?></td>
                              <td><?php echo $post_titulo ?></td>
                              <td><?php echo $post_autor ?></td>
                              <td><img class="img-responsive" src="../images/<?php echo $post_imagem; ?>" alt="IMG"></td>
                              <td><?php echo $post_data ?></td>
                              <td><?php echo $post_conteudo ?></td>
                            <?php }; ?>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include "includes/footer.php" ?>
</body>
</html>
