<?php 
  session_start();

?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php
 include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
	
	if(isset($_SESSION['email']) && isset($_SESSION['is_admin']))
	{
		if($_SESSION['is_admin']){

		}
		else
		{
		?>
		<script>
		
		// window.location.href="viewdept.php";
		</script>
			
		<?php		  
		}
	}
	else
	{
	  ?>
	<script>
	
	  //  window.location.href="index.php";
	</script>
		
	  <?php		  
	}
		
	   $sql="SELECT * FROM `department`";
       $result=mysqli_query($connection->myconn,$sql);
		?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
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
      <body class="hold-transition register-page">

        <script>
          function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
              alert("New Password and Re-Password not match");
              return false;
            }
          }
        </script>
        <div class="register-box">
          <div class="register-logo">
            <a href="#"><b>Admin</b> | Fogot-Password</a>
          </div>

          <div class="register-box-body">
            <p class="login-box-msg">Forgot Password</p>
            <form onSubmit="return validate();" action="#" method="post">

              <div class="form-group has-feedback">
                <input type="email" class="form-control" name="f_email" required="" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>


              <div class="form-group has-feedback">
                <input type="password" id="password"  name="f_new_pwd" class="form-control" required="" placeholder="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>

              <div class="form-group has-feedback">
                <input type="password" id="confirm_password"  name="f_new_repwd" class="form-control" required="" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
              </div>
              <div class="row">

                <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" style="margin-bottom: 20px;">Chnage Password</button>
                </div><!-- /.col -->
                <div class="col-xs-12">
                  <a href="index.php">Goto Login</a>
                </div><!-- /.col -->
              </div>
            </form>


          </div><!-- /.form-box -->
        </div><!-- /.register-box -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script type="text/javascript"></script>



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
