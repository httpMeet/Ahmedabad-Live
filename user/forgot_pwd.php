<?php session_start();?> 
<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2017 04:56:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	
	<?php 
//	  if(!($_SESSION['user_email']))
//	  {
//		  
//	  }
//	
	
	?>
	<?php
	include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
	

	
	
	  if(isset($_SESSION['user_email']))
	  {
		  ?>
	
	<script type="application/javascript">
		
		window.location.href = "index.php";
	</script>
	
	
	<?php
		  
	  }
	else
	{
		
	}
	
	?>
	
	
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.ico" />
  	<title>Ahmedabad Live | Forgot Password</title>
</head>
<body class="style-10">

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div>

    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- START HEADER -->
            

            <?php include('templates/header.php'); ?>


            <!-- END HEADER -->

            <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Login Form</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>Registered Customers</h3>
                                    <p>Already Registered User can Forgot Your Password And Access Login Credential</p>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="forgot_pwdcode.php">
						
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
                            </div>
                        </div>
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>New Customers</h3>
                                    <p>By creating an account with Website, you will be able to write complain regarding to particular department, Enter your general details.</p>
                                </div>
                                <a href="signup.php" class="button style-12">Register Account</a>
                            </div>
                        </div>
                    </div>
                </div>

                
                
                
                
                <!-- START FOOTER -->
              
              
              <!-- END FOOTER -->
            </div>

        </div>
        <div class="clear"></div>

    </div>

    


    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
</body>

<!-- Mirrored from 8theme.com/demo/html/mango/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2017 04:56:16 GMT -->
</html>
