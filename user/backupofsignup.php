<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2017 04:56:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	
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
  	<title>Mango - Login</title>
	
	
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
                    <a href="index.php">Home</a>
                    <a href="signup.php">Signup Form</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>New Users</h3>
                                    <p>First Time Registration required all details of users for better support and provide complain resolve facility to registerd user. Details Require for Record and manage system</p>
                                </div>
                                <form method="post">
									
									<label>Adhar card Numer</label>
                                    <input class="simple-field" type="text" required="" placeholder="Enter your 12 digit number" name="adharno" value="" pattern="^\d{4}\s\d{4}\s\d{4}$" 
									 />
									
									<label>Username</label>
                                    <input class="simple-field" type="text" required="" placeholder="Enter your name" name="username" value="" />
									
                                    <label>Email Address</label>
                                    <input class="simple-field" type="Email" required="" placeholder="Enter Email Address" name="emailid" value="" />
									
                                    <label>Password</label>
                                    <input class="simple-field" type="password" required="" placeholder="password should contain ! @ # $ % ^ & * A-Z a-z 0-9" value=""
								    name="pwd" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
			                        onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"/>
									
									<label>Confirm Password</label>
                                    <input class="simple-field" type="password" required="" placeholder="reenter Password" value="" name="conpwd" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"/>
									
									<label>Address</label>
                                    <input class="simple-field" type="text" required="" placeholder="Enter your address" value="" name="address" />
									
									<label>Pin Code</label>
                                    <input class="simple-field" type="number" maxlength="6" required="" placeholder="enter 6 digit pin code" value="" name="pincode" pattern="[0-9]{6}" />
									
									<label>Phone Number</label>
                                    <input class="simple-field" type="text" required="" placeholder="reenter Password" value="" name="phno" pattern="[7-9]{1}[0-9]{9}" />
									
                                    <div class="button style-10">Sign Up<input type="submit" value="" name="sign-submit" /></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>Registered Users</h3>
                                    <p>By Login in your account you can write complain in complain box and request to Government to solve your issue regarding particular Department.Gujarat Government support You</p>
                                </div>
                                <a href="login.php" class="button style-12">Login Account</a>
                            </div>
                        </div>
                    </div>
                </div>

                
                
                
                
                <!-- START FOOTER -->
              
              <?php include('templates/footer.php');?>
              
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
