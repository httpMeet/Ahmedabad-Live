<?php 
 header('Content-Type:application/json; charset=UTF-8');
    $deptid=$_GET['deptname'];

	include('dbfunctions.php');

    $connection = new createCon();
    $connection->connect();
	$ar = array();

    $sql="SELECT * FROM `department` WHERE `deptid`='$deptid'";
    $result=mysqli_query($connection->myconn,$sql);

//	$ar = [ 
//		"id0" => "area 0",
//		"id1" => "area 1",
//		"id3" => "area 2"
//	]; 

    while($row = mysqli_fetch_array($result))
	{
	$ar[ $row['deptid'] ] = $row['deptdesc'];
	}

	die ( json_encode($ar) );
?>


   
    