<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url() ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b><i class="fa fa-gg"></i></b></span>
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
                                <span class="hidden-xs"><?= $this->session->userdata('user') ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="<?php echo base_url('assets/dist/img/avatar04.png'); ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?= $this->session->userdata('user') ?>
                                        <small><?= $this->session->userdata('role'); ?></small>
                                    </p>
                                </li>
                                
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
                        <img src="<?php echo base_url('assets/dist/img/avatar04.png'); ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= $this->session->userdata('user') ?></p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>    
                </div>
                <!-- search form (Optional) -->
                
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Navigation</li>
                    <!-- Option"ally, you can add icons to the links -->

                    <li class="<?= $dashboard ?>"><a href="<?= base_url('mydashboard/home') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>



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
                    if (!empty($description)) {
                        echo $description;
                    }
                    ?></small>
                </h1>
                <ol class="breadcrumb">

                    <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard "></i>Dashboard</a></li>
                    <li class="active"><?= $title ?></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

