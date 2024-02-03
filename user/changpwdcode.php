<?php session_start();?>
<?php 
    

	include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    
    if(isset($_POST['submit']))
	{
		$opwd=$_POST['opwd'];
		$npwd=$_POST['npwd'];
		
		$sql="UPDATE `signup` SET `password`='$npwd' WHERE `password`='$opwd' ";
		$result=mysqli_query($connection->myconn,$sql);
		
		$row=mysqli_affected_rows($connection->myconn);
	if($row==1)
	{
		
		?>
<script type="text/javascript">

 alert("successfully changed password");
 window.location.href="index.php";
</script>

<?php
	}
	
	else
	{
		?>
<script type="text/javascript">

 alert("password change failed.try again !");
 window.location.href="changpwd.php";
</script>

<?php
		
	}

		
	}
else
{
	echo "error";
}
?>