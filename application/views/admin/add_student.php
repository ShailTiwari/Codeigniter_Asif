<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

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
<style type="text/css">
</style>
<form method="post" action="<?php echo base_url('index.php/admin/Save_Student');?>" id="form_main">
<section id="Add" class="bg-light-gray">
  <div class="container">
  <div class="row">
      <div class="col-lg-12 text-center">
          <h2 class="section-heading">ADD Student</h2>
      </div>
  </div>
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-warning">
      <div class="panel-heading"  style="background-color: #fed136;">
        <h3>Add Student</h3>
      </div>
      <div class="panel-body">
        <form action="" method="post">
    <div class="form-group">
      <label for="name">Username <b style="color: red">*</b>:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
      <input type="hidden" class="form-control" id="hdn_id" name="hdn_id">
    </div>
     <div class="form-group">
      <label for="email">Email <b style="color: red">*</b>:</label>
      <input type="email" class="form-control" id="useremail" placeholder="Enter Email" name="useremail" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password <b style="color: red">*</b>:</label>
      <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="userpassword" required>
    </div>
     <div class="form-group">
      <label for="cpwd">Confrim Password <b style="color: red">*</b>:</label>
      <input type="password" class="form-control" id="cpassword" placeholder="Enter Confirm password" name="cpassword" required>
    </div>
     <div class="form-group">
      <label for="address">Address <b style="color: red">*</b>:</label>
      <textarea type="comment" rows="5" cols="30" class="form-control" id="address" placeholder="Enter Address" name="address" required></textarea>
    </div>
      <div class="form-group">
      <label for="dob">D.O.B <b style="color: red">*</b>:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="dob" required>
    </div>
     <div class="form-group">
      <label for="city">City <b style="color: red">*</b>:</label>
      <input class="form-control" id="city" placeholder="Enter City" name="city" required>
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      Male<input type="radio"  id="gender" value="male" name="gender" required> Female<input type="radio" id="gender" value="female" name="gender" required>
    </div>
    <div class="form-group">
      <!-- <label for="img">Image Upload:</label>
      <input type="file" class="form-control" id="img" name="image" style="width:250px; margin-left: 100px; margin-top: -32px;"> -->
      
      <label for="checkbox"><input type="checkbox"  id="chk_status" name="chk_status">: IsActive</label>
    </div>
  </div>
    <div class="panel-footer">
        <input type="submit" name="submit" value="Signup" onclick="submitform();"  class="btn btn-primary">
      </div>
</div>
</div>
</div>
</section>
</form>


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
    <script type="text/javascript">
      function submitform(){
        var username = $("#username").val();
        if (username == "") {
            alert("Please Enter UserName");
            return false;
        }
        var Email = $("#useremail").val();
        if (Email == "") {
            alert("Please Enter Your Email ID");
            return false;
        }
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test($("#Email").val()) == false) {
            alertModal("Invalid Email Address");
            return false;
        }
        var pass = $("#userpassword").val();
        if (pass == "") {
            alert("Please Enter Password");
            return false;
        }
        var cpass = $("#cpassword").val();
        if (cpass == "") {
            alert("Please Enter Confirm Password");
            return false;
        }
        var password = $("#userpassword").val();
        
        if (password != cpass) {
            alert("Passwords do not match");
            return false;
        }
        var address = $("#address").val();
        if (address == "") {
            alert("Please Enter Address");
            return false;
        }
        var dob = $("#dob").val();
        if (dob == "") {
            alert("Please Select Date of Birth");
            return false;
        }
        var city = $("#city").val();
        if (city == "") {
            alert("Please Enter City");
            return false;
        }
      }
    </script>

</body>

</html>
