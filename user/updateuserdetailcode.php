<?php session_start();?> 

<?php
	include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    $id=$_SESSION['user_email'];

//    $sqluser="SELECT `userid` FROM `signup` WHERE `email`='$id'";
//    $resid=mysqli_query($connection->myconn,$sqluser);
//    $row=mysqli_fetch_array($resid);
//    $uid=$row['userid'];
//    echo $uid;
    
    if(isset($_POST['submit']))
	  {		  
		  $uname=$_POST['uname'];
		 
		  $ads=$_POST['ads'];
		  $phno=$_POST['phno'];
		  $pin=$_POST['pin'];
		  
		 
		  
		  $sql="UPDATE `signup` SET `username`='$uname',`address`='$ads',`pincode`='$pin',`phone`='$phno' WHERE `email`='$id'";
		  
		  $result=mysqli_query($connection->myconn,$sql);
		  
		  
		  
		  
		  if($result)
		  {
			  ?>

                 <script type="text/javascript">

                  alert("informations are updated successfully");
				   window.location.href="profile.php";
				</script>
			<?php
		  }
		  
		  else
		  {
			?>

                 <script type="text/javascript">

                  alert("un success");
				  window.location.href="profile.php";
				</script>
			<?php  
		  }
		  
	  }

?>