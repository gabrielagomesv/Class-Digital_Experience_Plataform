            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Login Well -->
                <div class="well">
                    <h4>Login</h4>
                    <div class="form-group">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Usuário" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="user_password" placeholder="Senha" class="form-control">
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" name="login" value="Login" class="btn btn-light">
                            </div>
                        </form>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php 
                              categories(); 
                            ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>