<?php

include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    
if(isset($_POST['submit']))
{
	$dept_id=$_POST['dept_id'];
	$area_id=$_POST['area_id'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone_no=$_POST['phone'];

    

    $sql = "SELECT * from `department_user` WHERE dept_id = '".$dept_id."'  AND area_id= '".$area_id."'";
    $result=mysqli_query($connection->myconn,$sql);

    $row=mysqli_num_rows($result);
    if($row == 1 &&  !isset($_POST['id'])){
        ?>
    <script type="text/javascript">

    alert("Department User Already exist Please Add diffrent ");
	window.location.href="newdeptuser.php";
    </script>
  <?php  } ?>


  <?php  
	if($_POST['id']){

	    $insert_query="UPDATE department_user
        SET dept_id='$dept_id', area_id='$area_id',email ='$email',password = '$password',phone_no = '$phone_no' WHERE id=".$_POST['id'];
    
    }else{
        $insert_query="INSERT INTO `department_user`(`dept_id`,`area_id`, `email`,`password`,`phone_no`) VALUES ('$dept_id','$area_id','$email','$password','$phone_no')";

    }
	
	$result=mysqli_query($connection->myconn,$insert_query);
	
	//$row=mysqli_num_rows($result);
	if($result==1)
	{
		
		?>
<script type="text/javascript">

 alert("department added successfully ");
	window.location.href="viewdeptusers.php";
</script>

<?php
	}
	
	else
	{
		?>
<script type="text/javascript">

 alert("inserion failed.try again !");
	window.location.href="newdeptuser.php";
</script>

<?php
		
	}
}


?>