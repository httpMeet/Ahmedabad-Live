<?php session_start();?> 


<!DOCTYPE html>
<html>

<!-- Mirrored from 8theme.com/demo/html/mango/index-bags.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2017 04:51:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<?php
	include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
	

	$sql="SELECT * FROM `department`";
	$result=mysqli_query($connection->myconn,$sql);
	  if(isset($_SESSION['user_email']))
	  {
		  
	  }
	else
	{
		?>
	 <script type="text/javascript">
		 
		// window.location.href="login.php";
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
  	<title>Ahmedabad Live | Complaint</title>
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
                                    <a class="entry" href="complaint.php"><span><i class="fa fa-angle-right"></i><?php echo $row['deptname']; ?></span></a>
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
                                 
                                        <form action="makecomplaint.php" method="post">
                                <div class="row">
									<div class="col-sm-12">
                                        <label>Choose Department <span>*</span></label>
										<select id="company" class="simple-field" name='deptname'
								onChange="getArea(this)">
											<option value="-1">Select Department</option>
											<?php 
											$sql="SELECT * FROM `department`";
	                                  $result=mysqli_query($connection->myconn,$sql);
											 if(mysqli_num_rows($result)>0)
									
											 {
										     while($row=mysqli_fetch_array($result))
										 
										       {
												   
											?>
											<option value="<?php echo $row['deptid']; ?>">
											    <?php
												   echo $row['deptname'];
												?>
											</option>
											<?php 
											   }
											 
											 }
										?>
									
										</select>
									  
                                    <div class="clear"></div>
									</div>
									
									<div class="col-sm-12">
                                       
<!--
                                     <textarea readonly id="deptdescdiv" class="simple-field" placeholder="Department detail" name="deptdesc"  required></textarea>
										
-->
                                     <div class="button style-10">Go to Complaint
										 
										 <input type="submit" name="Go to complaint" value="" />
									 </div>
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
   

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
	
	
	<script>
											
function getArea(dept)
{        
	
	var departmentId = dept.value;
	var strURL="deptdesc.php?deptname="+departmentId;
 	var req = new XMLHttpRequest(); // fuction to get xmlhttp object
	 if (req)
	 {
		  req.onreadystatechange = function(){
			  if (req.readyState == 4 ) { // which reprents ok status                    
				 if( req.status == 200 )
				  {
//					  document.getElementById('areadiv').innerHTML=req.responseText;
				  	var resp = JSON.parse(req.responseText);
					  var areadiv = document.getElementById('deptdescdiv');
					  areadiv.innerHTML ="";				  
					  for ( var i in resp )
					  {
						  var opt = document.createElement('option');
						  opt.value = i;
						  opt.innerHTML = resp[i];
						  
						  areadiv.appendChild(opt);
					  }
				  }
				  else 
				  { 
					 alert("There was a problem while using XMLHTTP:\n");
				  }
			  }
			  
		  }            
		req.open("GET", strURL, true); //open url using get method
		req.send(null);
	 }
}
</script>
</body>
	
</html>
