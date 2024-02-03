<?php session_start();?> 

<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/contact-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2017 04:54:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<?php 
   if (isset($_POST['submit']))  {
  //Email information
  $admin_email = "kodeeshwari09@gmail.com";
  $uname    = $_POST['uname'];
  $sname    = $_POST['sname'];
  $emailid   = $_POST['emailid'];
  $msg = $_POST['msg'];
  
  
  //send email
  mail($admin_email,$uname,$sname,$msg, "From:" . $emailid);
  
  //Email response
  echo "Thank you for contacting us!";
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
  	<title>Ahmedabad Live | Contact us</title>
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

                <div class="contact-spacer"></div>
                
               
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                        <div class="col-md-8 information-entry">
                            <h3 class="block-title main-heading">Give Us  Feedback</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Your Name <span>*</span></label>
                                        <input class="simple-field" type="text" placeholder="Your name (required)" required value="" />
                                        <div class="clear"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Your Surname</label>
                                        <input class="simple-field" type="text" placeholder="Your surname" value="" />
                                        <div class="clear"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Your Email <span>*</span></label>
                                        <input class="simple-field" type="email" placeholder="Your email address (required)" required value="" />
                                        <label>Your Message <span>*</span></label>
                                        <textarea class="simple-field" placeholder="Your message content (required)" required></textarea>
                                        <div class="button style-10">Send Message<input type="submit" value="" /></div>
                                    </div>
                                </div>
                            </form>
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

    <!-- map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/map.js"></script>
</body>

<!-- Mirrored from 8theme.com/demo/html/mango/contact-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2017 04:54:41 GMT -->
</html>
