<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Educare | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('/js/bootstrap.js');?>">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.css">
      <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/Ionicons/css/ionicons.min.css">
     <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- DataTables Export-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/datatables-export/css/buttons.dataTables.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/mystyle.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.min.css');?>">
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>E</b>C</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Educare</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <a href="<?php echo base_url()?>register" class="btn btn-primary" id="registertopbutton">Register</a>
                        <a href="<?php echo base_url()?>login" class="btn btn-primary" id="logintopbutton">Login</a>
                        <li class="dropdown user user-menu" style="margin-right: 50px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url('/img/user160.png')?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><i><?php echo $this->session->userdata("name")?></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            <a href="<?php echo base_url(); ?>auth/logout"> Cerrar Sesión</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>