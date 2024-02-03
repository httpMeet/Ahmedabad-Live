<?php session_start();?>
<?php

include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    
if(isset($_POST['submit']))
{
	$deptname=$_POST['deptname'];
	$deptdesc=$_POST['deptdesc'];
	$honame=$_POST['honame'];
	
	$dept_id=$_POST['id'];
	
	
	$insert_query="UPDATE `department` SET `deptname`='$deptname',`deptdesc`='$deptdesc',`officername`='$honame' WHERE `deptid`='$dept_id'";
	
	$result=mysqli_query($connection->myconn,$insert_query);
	
	$row=mysqli_affected_rows($connection->myconn);
	if($row==1)
	{
		
		?>
<script type="text/javascript">

 alert("department added successfully ");
	window.location.href="viewdept.php";
</script>

<?php
	}
	
	else
	{
		?>
<script type="text/javascript">

 alert("inserion failed.try again !");
	window.location.href="updatedept.php";
</script>

<?php
		
	}
}


?>