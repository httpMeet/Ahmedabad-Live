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
		   $locname=$_POST['locname'];
	   }
echo $deptname;
   
       $sql="SELECT `deptid` FROM `department` WHERE `deptname`='$deptname'";
       $result=mysqli_query($connection->myconn,$sql);

       $row=mysqli_fetch_array($result);
      
       $id=$row['deptid'];
       
       $sql_insert="INSERT INTO `area`(`areaname`, `deptid`) VALUES ('$locname','$id')";
      $result=mysqli_query($connection->myconn,$sql_insert);
      if($result)
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
	      window.location.href="newloc.php";

          </script>
      <?php
		
	
     
	}
       

 	?>
