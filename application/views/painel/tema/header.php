<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
if (!($_SESSION['usuario_logado'])) {
    $this->session->set_flashdata("danger", "Você deve se logar primeiro");
    redirect('/');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kairos</title>
        <!-- Bootstrap Core CSS -->
        <?php echo link_tag('assets/painel/vendor/bootstrap/css/bootstrap.min.css'); ?>
        <!-- MetisMenu CSS -->
        <?php echo link_tag('assets/painel/vendor/metisMenu/metisMenu.min.css'); ?>
        <!-- Custom CSS -->
        <?php echo link_tag('assets/painel/dist/css/sb-admin-2.min.css'); ?>
        <!-- Morris Charts CSS -->
        <?php echo link_tag('assets/painel/vendor/morrisjs/morris.css'); ?>
        <!-- Custom Fonts -->
        <?php echo link_tag('assets/painel/vendor/font-awesome/css/font-awesome.min.css'); ?>
        <!-- DataTables CSS -->
        <?php echo link_tag('assets/painel/vendor/datatables-plugins/dataTables.bootstrap.css'); ?>
        <!-- DataTables Responsive CSS -->
        <?php echo link_tag('assets/painel/vendor/datatables-responsive/dataTables.responsive.css'); ?>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"></a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#">
                                    <i class="fa fa-user fa-fw"></i> 
                                    User Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-gear fa-fw"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out fa-fw"></i> 
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <?php echo img('assets/painel/img/kairos.png', FALSE, ['class' => 'logo-painel']); ?>
                            </li>
                            <li>
                                <?php echo anchor('#', ' Dashboard', array('class' => 'fa fa-dashboard')); ?>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-usd fa-fw"></i> Financeiro<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                     <li>
                                        <?php echo anchor('contas', ' Contas', array('class' => '')); ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper">