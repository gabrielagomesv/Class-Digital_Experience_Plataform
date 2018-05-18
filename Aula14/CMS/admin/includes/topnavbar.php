<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CMS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li><a href="../index.php">Home</a></li>
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../admin/includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post"><i class="glyphicon glyphicon-font"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post" class="collapse">
                            <li>
                                <a href="add_posts.php"><i class="glyphicon glyphicon-plus-sign"></i> Adicionar novo post</a>
                            </li>
                            <li>
                                <a href="./posts.php"><i class="glyphicon glyphicon-eye-open"></i> Ver posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="glyphicon glyphicon-user"></i> Usuários <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="./add_users.php"><i class="glyphicon glyphicon-plus-sign"></i> Adicionar novo usuário</a>
                            </li>
                            <li>
                                <a href="./users.php"><i class="glyphicon glyphicon-eye-open"></i> Ver usuários</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="glyphicon glyphicon-comment"></i> Comentários</a>
                    </li>
                    <li>
                        <a href="../admin/categorias.php"><i class="glyphicon glyphicon-menu-hamburger"></i> Categorias</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="glyphicon glyphicon-cog"></i> Perfil</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>