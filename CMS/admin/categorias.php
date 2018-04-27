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
                        <h1 class="page-header">Categorias</h1>
                    <div class="col-lg-6">
                        <?php addCategoria();
                              deleteCategoria(); ?>
                        <form action="categorias.php" method="post">
                            <div class="form-group">
                                <label for="cat_nome">Adicionar categoria:</label>
                                <input type="text" name="cat_nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="adicionar" value="Adicionar" class="btn btn-primary">
                            </div>
                        </form>

                        <form action="categorias.php" method="post">
                            <div class="form-group">
                                <label for="cat_nome">Editar categoria:</label>
                                <?php editCategoria(); ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="editar" value="Editar" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">     
                        <table class="table table-bodered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>Editar</th>
                                    <th>Apagar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php listCategoria(); ?>
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
