<?php 
  session_start();

?>

<?php
       include('dbfunctions.php');

       $connection = new createCon();
       $connection->connect();

       $deptid=$_GET['id'];

       $sql="DELETE FROM `department` WHERE `deptid`='$deptid'";
       $result=mysqli_query($connection->myconn,$sql);
       
       


      if($result==1)
	  {
		  ?>
            <script>
            alert("departments are deleted successfully");
			window.location.href="viewdept.php";
			</script>


<?php
	  }
else
{
	?>
            <script>
            alert("  some problem occurs please try again!!");
			window.location.href="viewdept.php";
			</script>


<?php
}

       
?>