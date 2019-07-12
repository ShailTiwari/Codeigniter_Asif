<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(VENDOR); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/KaushanScript-Regular.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/Montserrat-Bold.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/Roboto Slab.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(VENDOR); ?>/font-awesome/css/Droid Serif.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(CSS); ?>/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url(JS); ?>/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index" style="background-image: url(<?php echo base_url('resources/img/back.png')?>);">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="modal-body" style="text-align: center">
                               <!--  <h2>Admin Login</h2>
                                <p class="item-intro text-muted">This Is Only For Admin</p> -->
                                <div class="panel panel-warning" style="text-align: left;">
                                    <div class="panel-heading"  style="background-color: #fed136;">
                                    <a class="btn btn-danger" href="<?php echo base_url('index.php/Admin/UserLogin')?>" style="float: right"><h4>User Login</h4></a>
                                    <h3>Admin Login</h3>
                                </div>
                                <div><center><img src="<?php echo base_url('resources/img/Admin.png')?>"></center></div>
                                <p class="text-danger text-center">
                                      <?php
                             echo $this->session->flashdata('msg');
                              ?>
                                </p>  
                                <div class="panel-body">
                                    <form action="" method="post">
                                  
                                   <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                  </div>
                                  <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password"> 
                                  </div></div>
                                  <div class="panel-footer">
                                <input type="submit" name="submit" value="Login" class="btn btn-primary">
                              </div>
                                </form>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>


   

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

</body>

</html>
