					<!-- Sidebar user panel (optional) -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
						<?php 
						if(isset($_SESSION['email']) && isset($_SESSION['is_admin']))
						{ 	
							if($_SESSION['is_admin'])
							{ ?>
							<p>Ahmedabad live Admin</p>
							<?php }else{ ?>
							<p>Ahmedabad live Department</p>
							<?php }
						}
							?>
							<!-- Status -->
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<?php 
					if(isset($_SESSION['email']) && isset($_SESSION['is_admin']))
					{
						?>
					<!-- Sidebar Menu -->
					<ul class="sidebar-menu">
						<li class="header">Menu</li>
						<!-- Optionally, you can add icons to the links -->
						<?php if($_SESSION['is_admin']){ ?>
						<li class="treeview">
							<a href="#"><i class="fa fa-link"></i> <span>Department</span> <i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a href="newdept.php">New Department</a></li>
								<li><a href="viewdept.php">View Department</a></li>
							</ul>
						</li>
						<?php } ?>

						<li class="treeview">
							<a href="#"><i class="fa fa-link"></i> <span>Department User</span> <i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
							<?php if($_SESSION['is_admin']){ ?>
								<li><a href="newdeptuser.php">New Department User</a></li>
								<li><a href="viewdeptusers.php">View Department Users</a></li>
							
							<?php }else { ?>
								<li><a href="viewdeptusers.php">View Department Users</a></li>
							<?php } ?>
							</ul>
						</li>
						
						<li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Complaints </span><i class="fa fa-angle-left pull-right"></i></a>


							<ul class="treeview-menu">

								<li><a href="viewcomp.php">View Complaints</a></li>
								
								
							</ul>

						</li>
						<?php if($_SESSION['is_admin']){ ?>
						<li class="treeview">
							<a href="#"><i class="fa fa-link"></i> <span>User</span> <i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">

								<li><a href="userdetail.php">View User</a></li>
								


							</ul>
						</li>

						<li class="treeview">
							<a href="#"><i class="fa fa-link"></i> <span>Admin</span> <i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a href="admin_change_pwd.php">Change Password</a></li>

							</ul>
						</li>

						<li class="treeview">
							<a href="#"><i class="fa fa-link"></i> <span>Location</span> <i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a href="newloc.php">New Location</a></li>
								<li><a href="viewloc.php">View Location</a></li>
								


							</ul>
						</li>
						<?php } ?>





					</ul>
					<?php } ?>
					<!-- /.sidebar-menu -->
				