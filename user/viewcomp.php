<?php session_start();?> 

<!DOCTYPE html>

<html>

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
	$id=$_SESSION['user_email'];

    $sqluser="SELECT `userid` FROM `signup` WHERE `email`='$id'";
    $resid=mysqli_query($connection->myconn,$sqluser);
    $row=mysqli_fetch_array($resid);
    $uid=$row['userid'];	
    // "SELECT Customers.CustomerName, Orders.OrderID
    // FROM Customers
    // LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
    // ORDER BY Customers.CustomerName;"

	$sql="SELECT complaint.username, complaint.email, complaint.compid, complaint.message,department.deptname, area.areaname  FROM complaint LEFT JOIN department ON complaint.deptname = department.deptid LEFT JOIN area ON complaint.areaname = area.areaid   where complaint.status='0' AND complaint.userid='$uid' ";
	
    $result=mysqli_query($connection->myconn,$sql);
	 
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
  	<title>Ahmedabad Live |  Complaints</title>
</head>
<body class="style-14">

    <!-- LOADER -->
   

    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- START HEADER -->
            <?php include('templates/header.php'); ?>


            <!-- END HEADER -->

            <div class="content-push">

                    <div class="row">
                        
                        <div class="col-md-3 col-md-push-9">
                            
                            <div class="clear"></div>
                        </div>

                        <div class="col-md-9 col-md-pull-3">
                           <table class="table table-hover">
							<tr>
								<th>Department Name</th>
								<th>Location</th>
								<th>Complaints</th>
								
								<th>Action</th>
							</tr>
							
							<?php
                   if(mysqli_num_rows($result)>0)
                   {
                     while($row=mysqli_fetch_array($result))
                     {  

                ?>
								<tr>
									<td>
										<?php echo $row['deptname']; ?>
									</td>
									
									<td>
										<?php echo $row['areaname']; ?>
									</td>
									<td width="400">
										
										
										<?php echo $row['message']; ?>
									</td>
												
									<td>
										<!-- <a href="updatecomp.php?id=<?php echo $row['compid']; ?>">
											<img src="img/update.png">
										</a> &nbsp; | &nbsp; -->
										
										<a href="deletecomp.php?id=<?php echo $row['compid']; ?>">
											<img src="img/delete.png"/>
										</a>
									</td>
								</tr>
								<?php

                }
                }
                 ?>

						</table>

                            <div class="clear"></div>

                        </div>

                    </div>
				
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
</body>


</html>
