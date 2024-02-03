<?php session_start();?>
	<?php

include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();

    $comp_id=$_GET['id'];
    
    $sql="DELETE FROM `complaint` WHERE `compid`='$comp_id'";
    

    $result=mysqli_query($connection->myconn,$sql);
	
	
	if($result==1)
	{
		
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
