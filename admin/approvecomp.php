<?php session_start();?>
	<?php

include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();

    $comp_id=$_GET['id'];
    
    $sql="UPDATE `complaint` SET `status`='1' WHERE `compid`='$comp_id'";
    

    $result=mysqli_query($connection->myconn,$sql);
	
	$row=mysqli_affected_rows($connection->myconn);


	$sql1="select * FROM  `complaint`  WHERE `compid`='$comp_id'";
    $result1=mysqli_query($connection->myconn,$sql1);
	$data = [];
	while($row1=mysqli_fetch_assoc($result1))
	{  
		$data = $row1;
	}




	require('mail.php');

	if($row==1)
	{
   		 sendemail($data['email'],"Successfully Approved Complaint","You Complaint is Approved with the Ahmedabad Live complaints department");
		?>
	
		<script type="text/javascript">
	
			alert("complaints are approved successfully");
			window.location.href = "viewcomp.php";

		</script>

		<?php
	}
	
	else
	{
   		 sendemail($data['email'],"Successfully Registered Complaint","You have Successfully Register Complaint with the Ahmedabad Live complaints department");
		?>
			<script type="text/javascript">
				alert("failed.try again !");
				window.location.href = "viewcomp.php";

			</script>

			<?php
		
	}

    
?>
