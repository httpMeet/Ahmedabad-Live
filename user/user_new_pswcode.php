<?php

   session_start();
?>
<?php
 include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    
if(isset($_POST['submit']))
{
	$email=$_POST['f_email'];
	$pwd=$_POST['f_new_pwd'];
}
$sql="UPDATE `user` SET `password`='$pwd' WHERE `email`='$email'";
$result=mysqli_query($connection->myconn,$sql);

$row=mysqli_affected_rows($connection->myconn);
  
if($row==1)
	 {
		
	    ?>
   <script type="text/javascript">
   alert("password changes successfully");
	window.location.href="home.php";

</script>

<?php
	 }
else
{
	?>
   <script type="text/javascript">
   alert("update failed..please enter write email address");
   window.location.href="user_new_psw.php";

</script>

<?php
}
?>