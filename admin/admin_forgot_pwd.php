<?php session_start();?> 
<!DOCTYPE html>
<html>
  <head>
	  <?php
	include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
	

	
	  if(isset($_SESSION['email']))
	  {
		  ?>
	 <script type="text/javascript">
		 
		 window.location.href="home.php";
	</script>
	
	<?php
	  }
	else
	{
		
	}
	?>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Forgot Your Password</p>
        
		<form method="post" enctype="multipart/form-data" action="admin_forgot_pwdcode.php">
						
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" name="f_email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email ID" required>
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">password</label>
				<input type="password" name="f_new_pwd" class="form-control" id="exampleInputEmail1" placeholder="Enter Password" minlength="6" required>
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">Confirm password</label>
				<input type="password" name="f_confirm_pwd" class="form-control" id="exampleInputEmail1" placeholder="Enter Re Password" minlength="6" required>
			</div>
			<!-- /.box-body -->
			<br/>
			<input class="btn btn-primary" type="submit" name="submit" value="submit">
		</form>

        <div class="social-auth-links text-center">
          
        </div><!-- /.social-auth-links -->

      <!--  <a href="admn_pwd_change.php">I forgot my password</a><br>-->
     

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>