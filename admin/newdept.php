<?php 
  session_start();

?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php
       include('dbfunctions.php');
		
		
		if(isset($_SESSION['email']) && $_SESSION['is_admin'])
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

       $connection = new createCon();
       $connection->connect();
		
      if(isset($_SESSION['email']) && $_SESSION['is_admin'])
	   {
		  
	  }
	else
	{
		?>
	 <script type="text/javascript">
		 
		 window.location.href="index.php";
	</script>
	
	<?php
		
	}
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
		<link href="css/bootstrap.min.css" rel="stylesheet">


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
											<small>Member since DEC. 2015</small>
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
			<aside class="main-sidebar" style="min-height:112%;">

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
                <small>ex. manage your complaints and solved status</small>
              </h1>


				</section>

				<div class="" style="margin-left:30px;margin-bottom: 70px;">

					<!-- /.box-header -->
					<!-- form start -->
					<br/>
					<form method="post" enctype="multipart/form-data" action="newdeptcode.php">

						<div class="form-group">
							<label for="exampleInputEmail1">Department Name</label>
							<input type="text" name="deptname" class="form-control" id="exampleInputEmail1" placeholder="Enter Department Name" required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Department Description</label>
							<textarea name="deptdesc" class="form-control" id="exampleInputEmail1" placeholder="Enter Department Description" required >
							
							</textarea>

						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Head Officer Name</label>
							<input type="text" name="honame" class="form-control" id="exampleInputEmail1" placeholder="Enter head officer Name" required>
						</div>




						<!-- /.box-body -->

						<br/>


						<input class="btn btn-primary" type="submit" name="submit" value="submit">


					</form>
				</div>




			</div>
			<!-- /.box -->



		</div>

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
				Anything you want
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
		</footer>



		<!-- jQuery 2.1.4 -->
		<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/app.min.js"></script>

	</body>

	</html>