<!DOCTYPE html>

<html>

<head>

  <?php
include('includes/dbfunctions.php');
include("includes/resize-class.php");
$db = new DB_FUNCTIONS();
?>
</head>

<body class="hold-transition skin-blue sidebar-mini">

	<table border="1">
		<tr>
			<td>

				Img
			</td>


			<td>

				Name
			</td>

		</tr>
<!--php code start for looping-->
		
		<?php
		
		
		$query="SELECT * FROM `product`";
		
		
		
		$result=mysql_query($query);
		
		
		
		while($row=mysql_fetch_row($result))
		{
			
			?>
		
		
		<tr>
		
			<td>
				
				<img src="upload/$row[1]"
			<?php echo $row[2]; ?>
			</td>
		
			
			<td>
			<?php echo $row[3]; ?>
			</td>
		</tr>
		
		
		<?php
			
		}
		?>
		
		
		
		
		
	</table>


</body>

</html>
