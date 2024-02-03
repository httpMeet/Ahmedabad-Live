<?php session_start();?> 


<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<?php
    
    
    
    if(isset($_SESSION['user_email']))
		{
		   	
		}
		else
		{
		  ?>
		<script>
		
		   window.location.href="index.php";
		</script>
		    
		  <?php		  
		}
  
    
    ?>
    
	<?php
	include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
	
	  if(isset($_SESSION['user_email']))
	  {
	        $sessionmail=$_SESSION['user_email'];
		 
		   $sql="SELECT * FROM `department`";
	       $result=mysqli_query($connection->myconn,$sql);

           $sql_signup="SELECT * FROM `signup` WHERE `email`='$sessionmail'";
           $result_signup=mysqli_query($connection->myconn,$sql_signup);
           $data = []; 
           while ($row = mysqli_fetch_assoc($result_signup))
           {
            $data = $row;
           }
	  }
	  else
	  {
		?>
	 <script type="text/javascript">
		 
		 window.location.href="login.php";
	</script>
	
	<?php
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
    <link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.ico" />
  	<title>Ahmedabad Live | Update Profile</title>
	

											
</head>
<body class="style-14">

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

                    <div class="row">
                        
                        <div class="col-md-3 col-md-push-9">
                            <div class="sidebar-navigation">
                                <div class="title">Departments<i class="fa fa-angle-down"></i></div>
                                <div class="list">
										<?php 
									if(mysqli_num_rows($result)>0)
									{
										while($row=mysqli_fetch_array($result))
										{
											
									
									?>
                                    <a class="entry" href="rto.php"><span><i class="fa fa-angle-right"></i><?php echo $row['deptname']; ?></span></a>
									<?php 
										}
									
									}
									?>
                 </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="col-md-9 col-md-pull-3">

                            <div class="navigation-banner-swiper">
                                <div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                    <div class="swiper-wrapper">
                                 
										<form action="updateuserdetailcode.php" method="post">
                                
											<div class="row">
									
																				
										
                                   
                                    <div class="col-sm-12">
                                        <label>Your Name<span>*</span></label>
                                        <input class="simple-field" type="text" placeholder="Your Name" value="<?=  $data['username']; ?>" name="uname" />
                                        <div class="clear"></div>
                                    </div>
                                    <div class="col-sm-12">
                                       
										
                                        <label>Email</label>
                                        <input class="simple-field" type="email" placeholder="" required value="<?= $data['email']; ?>" readonly name="email" />
										
                                        <label>address <span>*</span></label>
                                        <input class="simple-field" type="text" placeholder="" required value="<?= $data['address']; ?>" name="ads" />
										
										<label>Phone Number <span>*</span></label>
                                        <input maxlength="10" onkeypress="return isNumberKey(event)" class="simple-field" type="text" placeholder="" required value="<?= $data['phone']; ?>" name="phno" />
										
										<label>Pincode<span>*</span></label>
                                        <input maxlength="6" onkeypress="return isNumberKey(event)" class="simple-field" type="text" placeholder="" required value="<?= $data['pincode']; ?>" name="pin" />                               
                                        <div  class="button style-10">Update<input type="submit" name="submit" value="" /></div>
                                    </div>
                                </div>
                            </form>
                                        
                                    </div>
                                    
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

<div id="product-popup" class="overlay-popup">
        <div class="overflow">
            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                    
                </div>
            </div>
        </div>
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


</html>
