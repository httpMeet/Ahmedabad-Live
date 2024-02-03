<?php

include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    
if(isset($_POST['submit']))
{
	$deptname=$_POST['deptname'];
	$honame=$_POST['honame'];
	$deptdesc=$_POST['deptdesc'];


	$sql = "SELECT * from `department` WHERE deptname = '$deptname'";
    $result=mysqli_query($connection->myconn,$sql);

	$row=mysqli_num_rows($result);
    if($row == 1){
        ?>
    <script type="text/javascript">

    alert("Department Name Already exist");
	window.location.href="newdept.php";
    </script>
  <?php  } ?>
  <?php
	$insert_query="INSERT INTO `department`(`deptname`,`deptdesc`, `officername`) VALUES ('$deptname','$deptdesc','$honame')";
	
	$result=mysqli_query($connection->myconn,$insert_query);
	
	//$row=mysqli_num_rows($result);
	if($result==1)
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
	window.location.href="newdept.php";
</script>

<?php
		
	}
}


?>