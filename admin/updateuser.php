<?php 
 session_start();
?>
	<!DOCTYPE html>
	<html>

	<head>


		<?php
 include('dbfunctions.php');
		
 if(isset($_SESSION['email']) && isset($_SESSION['is_admin']))
 {
	 if($_SESSION['is_admin']){

	 }
	 else
	 {
	 ?>
	 <script>
	 
	 window.location.href="viewdept.php";
	 </script>
		 
	 <?php		  
	 }
 }
 else
 {
   ?>
 <script>
 
	window.location.href="index.php";
 </script>
	 
   <?php		  
 }

    $connection = new createCon();
    $connection->connect();
   
    $sql="SELECT * FROM `signup`";
    $result=mysqli_query($connection->myconn,$sql);

 	?>



			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Ahmedabad Live | Admin</title>
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
			<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
        -->
			<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	</head>

	<body class="hold-transition skin-blue sidebar-mini">
		<div class="">

			<!-- Main Header -->
			<header class="main-header">

				<!-- Logo -->
				<a href="home.php" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>Admin</b></span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b>Admin</b>- Ahmedabad live</span>
				</a>

				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">

							<!-- User Account Menu -->
							<li class="dropdown user user-menu">
								<!-- Menu Toggle Button -->
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<!-- The user image in the navbar-->
									<img src="dist/img/avatar5.png" class="user-image" alt="User Image">
									<!-- hidden-xs hides the username on small devices so only the image appears. -->
									<span class="hidden-xs">Main Admin</span>
								</a>
								<ul class="dropdown-menu">
									<!-- The user image in the menu -->
									<li class="user-header">
										<img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
										<p>
											Ahmedabad Live
											
										</p>
									</li>

									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											
										</div>
										<div class="pull-right">
											<a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>

						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">

				<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

					<?php
					include("templates/sidebar.php");
					?>
</section>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
                Ahmedabad Live
               
              </h1>

				</section>

				<!-- Main content -->
				<section class="content">

					<!-- /.box-header -->
					<!-- Small boxes (Stat box) -->

					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>user Id</th>
								<th>Adhar Card NUmber</th>
								<th>User Name</th>
								<th>Email </th>
								<th>password</th>
								<th>Address</th>
								<th>Pincode</th>
								<th>Phone Number</th>
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
										<?php echo $row['userid']; ?>
									</td>
									<td>
										<?php echo $row['adhar']; ?>
									</td>
									<td>
										<?php echo $row['username'];?>
									</td>
									<td>
										<?php echo $row['email']; ?>
									</td>
									<td>
										<?php echo $row['password'];?>
									</td>
									<td>
										<?php echo $row['address'];?>
									</td>
									<td>
										<?php echo $row['pincode'];?>
									</td>
									<td>
										<?php echo $row['phone'];?>
									</td>
									<td>
										<a href="updateadharcard.php"><img src="images/update.png"></a> &nbsp; | &nbsp;
										<a href="deleteuser.php"><img src="images/delete.png"></a>
									</td>
								</tr>
								<?php

                }
                }
                 ?>







						</table>

					</div>
					<!-- /.box -->



				</section>
			</div>

			


			<!-- jQuery 2.1.4 -->
			<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
			<!-- Bootstrap 3.3.5 -->
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<!-- AdminLTE App -->
			<script src="dist/js/app.min.js"></script>

			<!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
	</body>

	</html>
