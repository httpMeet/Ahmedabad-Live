<?php 
  session_start();

?>

	
	<?php
       include('dbfunctions.php');

       $connection = new createCon();
       $connection->connect();

	   if(isset($_POST['submit']))
	   {
		   $deptname=$_POST['deptname'];
		   $deptloc=$_POST['deptloc'];
	   }
       echo $deptname."<br/>";
   
       $sql="SELECT `deptid` FROM `department` WHERE `deptname`='$deptname'";
       $result=mysqli_query($connection->myconn,$sql);

       $row=mysqli_fetch_array($result);
       print_r($row);
       $id=$row['deptid'];
       echo $id;

      $sql_update="UPDATE `area` SET `areaname`='$deptloc' WHERE `deptid`='$id'";
      $result=mysqli_query($connection->myconn,$sql_update);
      
      $row=mysqli_affected_rows($connection->myconn);

      if($row==1)
	  {
		  ?>

          <script type="text/javascript">

          alert("location added successfully ");
	      window.location.href="viewloc.php";
</script>
      <?php
	  }
    else{
		?>

          <script type="text/javascript">

          alert("unsyccessfull !try again");
	      window.location.href="updateloc.php";

          </script>
      <?php
		
	
     
	}
       

 	?>
