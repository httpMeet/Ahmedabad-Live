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
		   $dept_id=$_POST['id'];
		 
	   }
      // echo $deptname."<br/>";
   
       $sql="SELECT `deptid` FROM `department` WHERE `deptname`='$deptname'";
       $result=mysqli_query($connection->myconn,$sql);

       $row=mysqli_fetch_array($result);
       
       $id=$row['deptid'];
   

      $sql_del="DELETE FROM `department` WHERE `deptid`='$id'";
      $result=mysqli_query($connection->myconn,$sql_del);
      
      $row=mysqli_affected_rows($connection->myconn);


      $sql_delloc="DELETE FROM `area` WHERE `deptid`='$id'";
      $result=mysqli_query($connection->myconn,$sql_delloc);
      
      $rowloc=mysqli_affected_rows($connection->myconn);

      if($row==1)
	  {
		  ?>

          <script type="text/javascript">

          alert("department delted successfully ");
	      window.location.href="viewdept.php";
</script>
      <?php
	  }
    else{
		?>

          <script type="text/javascript">

          alert("unsyccessfull !try again");
	      window.location.href="deletedept.php";

          </script>
      <?php
		
	
     
	}
       

 	?>
