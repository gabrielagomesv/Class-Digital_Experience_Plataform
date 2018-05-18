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
                        <h1 class="page-header">Ver todos os usuários</h1>
                        <table class="table table-bodered">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Username</th>
                              <th scope="col">Permissão</th>
                              <th scope="col">Nome</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                              global $connection;

                              $query = "SELECT * FROM user";
                              $result = mysqli_query($connection, $query);

                              while($row = mysqli_fetch_assoc($result)){
                                $user_id = $row['user_id'];
                                $username = $row['username'];
                                $user_role = $row['user_role'];
                                $user_nome = $row['user_nome'];          
                            ?>
                            <tr>    
                              <td><?php echo $user_id ?></td>
                              <td><?php echo $username ?></td>
                              <td><?php echo $user_role ?></td>
                              <td><?php echo $user_nome ?></td>
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
