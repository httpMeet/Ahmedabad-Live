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
   $confirmPWd = $_POST['f_confirm_pwd'];
}

if($pwd == $confirmPWd)
    {

   $sql="UPDATE `admin` SET `password`='$pwd' WHERE `adminemail`='$email'";
   $result=mysqli_query($connection->myconn,$sql);

   $row=mysqli_affected_rows($connection->myconn);
   
   if($row>0)
      {
         
         ?>
      <script type="text/javascript">
      alert("password changes successfully");
      window.location.href="index.php";

   </script>

   <?php
      }
   else
   {
      ?>
      <script type="text/javascript">
      alert("Email Id Does not Match");
      window.location.href="admin_forgot_pwd.php";

   </script>

   <?php
   }
}
else
{
    ?>
            <script type="application/javascript">
                alert("Password and Confirm Password Not Matched ! Try Again");
                window.location.href = "admin_forgot_pwd.php";

            </script>
            <?php
}
?>