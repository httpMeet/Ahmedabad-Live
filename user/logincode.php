<?php

   session_start();
?>
<?php
 include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    
if(isset($_POST['login-submit']))
{
	$email=$_POST['email-login'];
	$pwd=$_POST['pwd'];
}
	 $sql="SELECT `email`, `password` FROM `signup` WHERE `email`='$email' AND `password`='$pwd'";
     $result=mysqli_query($connection->myconn,$sql);
    
     $row=mysqli_num_rows($result);
     if($row==1)
	 {
		 $_SESSION['user_email']=$email;
		
		 ?>
   <script type="text/javascript">
   alert("login success");
	  window.location.href="index.php";

</script>

<?php
	 }
else
{
	?>
   <script type="text/javascript">
   alert("email and password are wrong");
    window.location.href="login.php";

</script>

<?php
}
?>