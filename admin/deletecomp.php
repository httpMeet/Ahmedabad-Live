<?php session_start();?>
	<?php


include('dbfunctions.php');

	if(isset($_SESSION['email']) && isset($_SESSION['is_admin']))
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

    $comp_id=$_GET['id'];

	$sql1="select * FROM  `complaint`  WHERE `compid`='$comp_id'";
    $result1=mysqli_query($connection->myconn,$sql1);
	$data = [];
	while($row1=mysqli_fetch_assoc($result1))
	{  
		$data = $row1;
	}
    
    $sql="DELETE FROM `complaint` WHERE `compid`='$comp_id'";
    

    $result=mysqli_query($connection->myconn,$sql);



	
	require('mail.php');
	if($result==1)
	{
		sendemail($data['email'],"Successfully Approved Complaint","You Complaint is deleted with the Ahmedabad Live complaints department");
		
		?>
		<script type="text/javascript">
			alert("complaints are deleted successfully");
			window.location.href = "viewcomp.php";

		</script>

		<?php
	}
	
	else
	{
		?>
			<script type="text/javascript">
				alert("failed.try again !");
				window.location.href = "viewcomp.php";

			</script>

			<?php
		
	}

    
?>
