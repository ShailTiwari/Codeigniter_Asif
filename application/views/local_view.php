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

<body id="page-top" class="index" style="background-image: url(<?php echo base_url('resources/img/images.jpg')?>);">
    <div class="container"><br><br><br><br><br><br>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-2">
                <div class="col-lg-6">
                    <a href="<?php echo base_url('index.php/Admin/AdminLogin')?>">
                    <!-- <img src="<?php //echo base_url('resources/img/administrator.png')?>"> -->
                    <img src="<?php echo base_url('resources/img/logo.png'); ?>" class="img-responsive" alt="" style="width: 50%;">
                    <h1 style="margin-left: 11%;">Admin</h1></a>
                </div>
                <div class="col-lg-6">
                    <a href="<?php echo base_url('index.php/Admin/UserLogin')?>">
                    <img src="<?php echo base_url('resources/img/student.png')?>">
                    <h1 style="margin-left: 17%;">User</h1></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
  

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


