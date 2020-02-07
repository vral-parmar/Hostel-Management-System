<?php
// session_start();
// if(isset($_SESSION['username_fac'])){
//   header("location:home");
// }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>RSU Attendance System</title>
    <link rel="icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="css/Bootstrap_4.3.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/hostel_script.js"></script>
    <style type="text/css">
    body{
  margin: 0;
  padding: 0;
  font-family: "montserrat";
}
  	.login-form {
  		width: 350px;
      	margin: 100px auto;
  	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
        padding: 40px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {
        font-size: 15px;
        font-weight: bold;
    }
  </style>
</head>
<body class="bg-primary">
    <div class="login-form col-md-10 col-sm-6 col-xs-10 container" style="padding-top:%;">
        <form id="Login" action="" method="post" class="user" style="border-radius: 8px;">
            <div class="container">
                <div class="">
                   <h3 class="text-center">Login</h3>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" placeholder="Username" required="required" name="username" autofocus style="border-radius: 50px;">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user " placeholder="Password" required="required" name="pswrd" style="border-radius: 50px;">
            </div><br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-user btn-block " value="Login" style="border-radius: 50px;"><!--i class="fa fa-sign-in" aria-hidden="true"></i-->
            </div>
        </form>
    </div>
</body>
</html>
