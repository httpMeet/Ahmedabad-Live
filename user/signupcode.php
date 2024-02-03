<?php

include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
    
if(isset($_POST['sign-submit']))
{
	$adhar="000000";
	$username=$_POST['username'];
	$email=$_POST['emailid'];
	$password=$_POST['password'];
	$conpwd=$_POST['conpwd'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$phone=$_POST['phone'];
    
    require('mail.php');
    sendemail($email,"Successfully Registered","You have successfully Register with the Ahmedabad Live complaints department");
    
    if($password == $conpwd)
    {
        
        
        $check_user = "SELECT * FROM `signup` WHERE `email` = '$email'";
        
        $count = mysqli_query($connection->myconn,$check_user);
        
        if(mysqli_num_rows($count)>0)
        {
            ?>

    <script type="application/javascript">
        alert("Already Registered with this email id");
        window.location.href = "signup.php";

    </script>
    <?php
            
        }
        else
        {
            
            $insert_query="INSERT INTO `signup`(`adhar`,`username`, `email`, `password`, `address`, `pincode`, `phone`) VALUES ('$adhar','$username','$email','$password','$address','$pincode','$phone')";
	
	$result=mysqli_query($connection->myconn,$insert_query);
	
	if($result)
	{
		$_SESSION['user']=$username;
		?>
        <script type="text/javascript">

            alert("Resistered successfully");
            window.location.href = "login.php";

        </script>

        <?php
	}
	
	else
	{
		?>
            <script type="text/javascript">
                alert("Resistered unsuccessfull");
                window.location.href = "signup.php";

            </script>

            <?php
		
	}
            
        }
        
    }
    else
    {
        ?>
                <script type="application/javascript">
                    alert("Password and Confirm Password Not Matched ! Try Again");
                    window.location.href = "signup.php";

                </script>
                <?php
    }
	
}

?>
