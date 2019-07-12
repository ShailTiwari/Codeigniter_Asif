<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(VENDOR); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/KaushanScript-Regular.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/Montserrat-Bold.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/Roboto Slab.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/Droid Serif.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> -->

    <!-- Theme CSS -->
    <link href="<?php echo base_url(CSS); ?>/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url(JS); ?>/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: #222;">
        <div class="container" style="width: 1275px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Maulana Azad School & Madarsa</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li class="active">
                        <a class="page-hover" href="<?php echo site_url('admin/dash')?>"><i class="fa fa-dashboard"></i>Dash</a>
                    </li>
                    <li class="active">
                        <a class="page-hover" href="<?php echo site_url('admin/add_student')?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Add Student
</a>
                    </li>
                    <li class="active">
                        <a class="page-hover" href="<?php echo site_url('admin/view_student')?>"><i class="fa fa-eye" aria-hidden="true"></i>View Student
</a>
                    </li>
                    <li class="active">
                        <a class="page-hover" href="<?php echo site_url('admin/about')?>"><i class="fa fa-info-circle" aria-hidden="true"></i>About
</a>
                    </li>
                    <li class="active">
                        <a class="page-hover" href="<?php echo site_url('admin/team')?>"><i class="fa fa-users" aria-hidden="true"></i>Team
</a>
                    </li>
                    <li class="active">
                        <a class="page-hover" href="<?php echo site_url('admin/contact')?>"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a>
                    </li>
                    <li class="active">
                        <a class="page-hover" href="<?php echo site_url('admin/logout')?>"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <?php
// echo $pagename;
$this->load->view($pagename);
?>
<footer style="background-color: #dddddd">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                      <span class="copyright">Copyright &copy; 2017. All rights reserved.</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="copyright">Made with <i class="fa fa-heart"></i> by Mohd Asif Hasan </a></span>
                </div>
            </div>
        </div>
    </footer>
  

        <!-- jQuery -->
    <script src="<?php echo base_url(VENDOR); ?>/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(VENDOR); ?>/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(JS); ?>/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(JS); ?>/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url(JS); ?>/agency.min.js"></script>


