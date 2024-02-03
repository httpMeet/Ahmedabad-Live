<?php 
 header('Content-Type:application/json; charset=UTF-8');
    $deptid=$_GET['deptname'];

	include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
	$ar = array();

    $sql="SELECT * FROM `area` WHERE `deptid`='$deptid'";
    $result=mysqli_query($connection->myconn,$sql);



    while($row = mysqli_fetch_array($result))
	{
	$ar[ $row['areaid'] ] = $row['areaname'];
	}

	die ( json_encode($ar) );
	
?>


   
    