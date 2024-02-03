<?php 
  session_start();

?>

<?php
       include('dbfunctions.php');

       $connection = new createCon();
       $connection->connect();

       $areaid=$_GET['id'];

       $sql="DELETE FROM `area` WHERE `areaid`='$areaid'";
       $result=mysqli_query($connection->myconn,$sql);
       
       print_r($result);


      if($result==1)
	  {
		  ?>
            <script>
            alert("Location deleted successfully");
			window.location.href="deleteloc.php";
			</script>


<?php
	  }
else
{
	?>
            <script>
            alert(" deleted unsuccessfull");
			window.location.href="deleteloc.php";
			</script>


<?php
}

       
?>