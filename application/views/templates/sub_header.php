

<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?= base_url() ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>AIP</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Alumni </b>Portal</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!--uSer-->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo base_url('assets/dist/img/avatar04.png'); ?>" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">END</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo base_url('assets/dist/img/avatar04.png'); ?>" class="img-circle" alt="User Image">

                                <p>
                                    END - Admin
                                    <small>Member since 2018</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!--              <li class="user-body">
                                            <div class="row">
                                              <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                              </div>
                                              <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                              </div>
                                              <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                              </div>
                                            </div>
                                             /.row 
                                          </li>-->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#logoutModal">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url('assets/dist/img/avatar04.png'); ?>"" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>END</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>    
            </div>
            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Option"ally, you can add icons to the links -->
                <?php
                $active=array('','','','','');
                
                
                if ($title == 'Dashboard') {
                    $active[0] = 'active';
                }
                if ($title == 'Degree') {
                    $active[1] = 'active';
                }
                if ($title == 'Alumni') {
                    $active[2]= 'active';
                }
                ?>


                <li class="<?= $active[0]; ?>"><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>


                <li class="treeview">
                    <a href="#"><i class="fa fa-archive"></i> <span>Manage Alumni</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                         <li class="<?= $active[2]; ?>"><a href="<?= base_url('admin/alumni') ?>"><i class="fa fa-circle-o text-green"></i>Alumni</a></li>
                    </ul>
                </li>
                <li class="<?= $active[1]; ?>"><a href="<?= base_url('admin/degree') ?>"><i class="fa fa-graduation-cap"></i><span>Academic Degrees</span></a></li>
                <li class="<?= $active[2]; ?>"><a href="<?= base_url('admin/alumni') ?>"><i class="fa fa-group "></i><span>Alumni</span></a></li>

            </ul>
            <!-- /.sidebar-menu -->

        </section>


    </aside>
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                    <?php
                    if (!empty($page)) {
                        echo $page;
                    }
                    ?>
                <small><?php
                    if (!empty($page1)) {
                        echo $page1;
                    }
                    ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

