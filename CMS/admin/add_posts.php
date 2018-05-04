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
                        <h1 class="page-header">Adicionar Postagens</h1>
                        <?php 
                            addPost();
                        ?>
                        <form action="add_posts.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="post_titulo">Título do texto</label>
                                <input type="text" name="post_titulo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="post_autor">Autor</label>
                                <input type="text" name="post_autor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="post_imagem">Upload de imagem</label>
                                <input type="file" name="post_imagem" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="post_conteudo">Corpo da postagem</label>
                                <textarea name="post_conteudo" class="form-control"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" name="adicionar" value="Adicionar" class="btn btn-primary">
                            </div>
                        </form>
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
