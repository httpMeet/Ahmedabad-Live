<?php

include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    
if(isset($_POST['submit']))
{
	
	$adhar=$_POST['adhar'];
	
	$id=$_POST['id'];
	
	
	$insert_query="UPDATE `signup` SET `adhar`='$adhar' WHERE `userid`='$id'";
	
	$result=mysqli_query($connection->myconn,$insert_query);
	
	$row=mysqli_affected_rows($connection->myconn);
	if($row==1)
	{
		
		?>
<script type="text/javascript">

 alert("successfully updated userdetail");
 window.location.href="userdetail.php";
</script>

<?php
	}
	
	else
	{
		?>
<script type="text/javascript">

 alert("update failed.try again !");
 window.location.href="updateadharcard.php";
</script>

<?php
		
	}
}


?>