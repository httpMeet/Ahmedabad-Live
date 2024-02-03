<?php 
  session_start();

?>

<?php
       include('dbfunctions.php');

       $connection = new createCon();
       $connection->connect();

       $userid=$_GET['id'];

       $sql="DELETE FROM `signup` WHERE `userid`='$userid'";
       $result=mysqli_query($connection->myconn,$sql);
       
       


      if($result==1)
	  {
		  ?>
            <script>
            alert("user detail deleted successfully");
			window.location.href="userdetail.php";
			</script>


<?php
	  }
else
{
	?>
            <script>
            alert("  some problem occurs please try again!!");
			window.location.href="userdetail.php";
			</script>


<?php
}

       
?>