<?php session_start();?>
	<?php


include('dbfunctions.php');

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

    $connection = new createCon();
    $connection->connect();

    $id=$_GET['id'];
    
    $sql="DELETE FROM `department_user` WHERE `id`='$id'";
    

    $result=mysqli_query($connection->myconn,$sql);
	
	
	if($result==1)
	{
		
		?>
		<script type="text/javascript">
			alert("Department User deleted successfully");
			window.location.href = "viewdeptusers.php";

		</script>

		<?php
	}
	
	else
	{
		?>
			<script type="text/javascript">
				alert("failed.try again !");
				window.location.href = "viewdeptusers.php";

			</script>

			<?php
		
	}

    
?>
