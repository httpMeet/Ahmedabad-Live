<!DOCTYPE html>
<html>


<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Ahmedabad Live | Signup</title>


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
                                    <form method="post" action="signupcode.php">

                                        <!-- <label>Adhar card Numer</label>
                                        <input onkeypress="return isNumberKey(event)" class="simple-field" type="text" required="" maxlength="12" placeholder="Enter your 12 digit number" name="adharno" value="" /> -->

                                        <label>Username</label>
                                        <input class="simple-field" type="text" required="" placeholder="Enter your name" name="username" value="" />

                                        <label>Email Address</label>
                                        <input class="simple-field" type="Email" required="" placeholder="Enter Email Address" name="emailid" value="" />

                                        <label>Password</label>
                                        <input id="password1" class="simple-field" type="password" required="" placeholder="Password length atleast 6 charcter" value="" name="password" />


                                        <label>Confirm Password</label>
                                        <input id="password2" class="simple-field" type="password" required="" placeholder="reenter Password" value="" minlength="6" name="conpwd" />

                                        <label>Address</label>
                                        <input class="simple-field" type="text" required="" placeholder="Enter your address" value="" name="address" />

                                        <label>Pin Code</label>
                                        <input onkeypress="return isNumberKey(event)" class="simple-field" type="text" maxlength="6" required="" placeholder="enter 6 digit pin code" value="" name="pincode" />

                                        <label>Phone Number</label>
                                        <input onkeypress="return isNumberKey(event)" maxlength="10" class="simple-field" type="text" required="" placeholder="Enter Contact Number" value="" name="phone" />

                                        <div class="button style-10">Sign Up
                                            <input type="submit" value="" name="sign-submit" />
                                        </div>
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

    <script type="application/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }

    </script>





    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
</body>

<!-- Mirrored from 8theme.com/demo/html/mango/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2017 04:56:16 GMT -->

</html>
