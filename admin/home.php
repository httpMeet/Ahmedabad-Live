<?php 
  session_start();

?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php 
		if(isset($_SESSION['email']))
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
		
		  include('dbfunctions.php');
  
          $connection = new createCon();
          $connection->connect(); 
		  $sql_approved="SELECT COUNT(*) FROM `complaint` where `status`='1'";
	      $result_approved=mysqli_query($connection->myconn,$sql_approved);
		  $row_cnt_approved = mysqli_fetch_row($result_approved);
		  $cnt_approved=$row_cnt_approved['0'];

          $sql_user="SELECT COUNT(*) FROM `signup`";
		  $result_user=mysqli_query($connection->myconn,$sql_user);
		  $row_cnt_user = mysqli_fetch_row($result_user);
		  $cnt_user=$row_cnt_user[0];
		
		  $sql_comp="SELECT COUNT(*) FROM `complaint`";
		  $result_comp=mysqli_query($connection->myconn,$sql_comp);
		  $row_cnt_comp = mysqli_fetch_row($result_comp);
		  $cnt_comp=$row_cnt_comp[0];
		
		  $sql_dept="SELECT COUNT(*) FROM `department`";
		  $result_dept=mysqli_query($connection->myconn,$sql_dept);
		  $row_cnt_dept = mysqli_fetch_row($result_dept);
		  $cnt_dept=$row_cnt_dept[0];
		  
          
		   
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
		<div class="wrapper">

			<!-- Main Header -->
			<header class="main-header">

				<!-- Logo -->
				<a href="home.php" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>Admin</b></span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b></b>Ahmedabad live</span>
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
									<!-- <span class="hidden-xs">Main Admin</span> -->
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
			<!-- Left s2ide column. contains the logo and sidebar -->
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

					<div class="row">
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3><?php echo $cnt_dept; ?></h3>
                      <p>Total Departments</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-cubes"></i>
                    </div>
                    <a href="viewdept.php" class="small-box-footer">
                      More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3><?php echo $cnt_comp; ?></h3>
                      <p>Total Complaints</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-shopping-cart"></i>
                    </div>
                    <a href="viewcomp.php" class="small-box-footer">
                      More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3><?php echo $cnt_user; ?></h3>
                      <p>Total registerd users</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="userdetail.php" class="small-box-footer">
                      More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3><?php echo $cnt_approved; ?></h3>
                      <p>Approved Complaints</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="viewcomp.php" class="small-box-footer">
                      More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div><!-- ./col -->
              </div><!-- /.row -->
			
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