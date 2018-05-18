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
                        <h1 class="page-header">Adicionar Usuários</h1>
                        <?php 
                            addUser();
                        ?>
                        <form action="add_users.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="user_password">Senha</label>
                                <input type="password" name="user_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="user_role">Permissão</label>
                                <input type="text" name="user_role" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="user_nome">Nome</label>
                                <input name="user_nome" class="form-control">
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
