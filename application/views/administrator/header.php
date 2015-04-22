<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIMPEG | Home</title>

    <link href="<?php echo base_url('assets/admin/css/plugins/bootstrap-fileupload/bootstrap-fileupload.css'); ?>" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet" >
    <link href="<?php echo base_url('assets/admin/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <!-- Morris -->
    <link href="<?php echo base_url('assets/admin/css/plugins/morris/morris-0.4.3.min.css'); ?>" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url('assets/admin/js/plugins/gritter/jquery.gritter.css'); ?>" rel="stylesheet">

        <!-- Data Tables -->
    <link href="<?php echo base_url();?>assets/admin/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                           <center> <img alt="image" class="img-circle" src="<?php echo base_url() .'assets/user_image/'. $this->session->userdata('foto'); ?>" width="50px" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('nama_lengkap');?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata('status');?> <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?php echo base_url('login/ganti_password'); ?>"><i class="fa fa-wrench"></i> Pengaturan Akun</a></li>
                                <li><a href="<?php echo base_url('administrator/manage_user'); ?>"><i class="fa fa-user"></i> Manajemen User</a></li>
                                <li class="divider"></li>
                                <li><a href='<?php echo base_url('login/logout'); ?>'><i class="fa fa-share-square-o"></i> Logout</a></li>
                            </ul>
                        </div>
                        </center>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('administrator/home'); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-archive"></i> <span class="nav-label">Data-data Pegawai</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('administrator/data_keluarga');?>"><i class="fa fa-child"></i>Keluarga</a></li>
                            <li><a href="<?php echo base_url('administrator/data_gaji_pokok');?>"><i class="fa fa-credit-card"></i>Gaji Pokok</a></li>
                            <li><a href="<?php echo base_url('administrator/data_riwayat_jabatan');?>"><i class="fa fa-sitemap"></i>Riwayat Jabatan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-archive"></i> <span class="nav-label">Master</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url('administrator/data_keluarga');?>"><i class="fa fa-child"></i>Status Pegawai</a></li>
                            <li><a href="<?php echo base_url('administrator/gaji_pokok');?>"><i class="fa fa-credit-card"></i>Golongan</a></li>
                        </ul>
                    </li>
                   
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="http://webapplayers.com/inspinia_admin-v1.8/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Aplikasi Sistem Informasi Pegawai.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo base_url('login/logout'); ?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
            </nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                   <center><p><h2>Sistem Informasi Kepegawaian (SIMPEG) PNS Kabupaten TES</h2></p>
<h3>Jln. tes 14, tes, Tes-Jawa Barat. Telepon : 000000000</h3></center>
