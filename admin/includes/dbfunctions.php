<?php


define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","");
define("DB","grocery");

class DB_FUNCTIONS {
  	
	public function __construct() {
		$conn = mysql_connect(DBHOST,DBUSER,DBPWD);
		$db_select = mysql_select_db(DB,$conn);		
	}
	
	public function getResults($table) 
	{
	    $data = array();
		$query = mysql_query("SELECT * FROM $table") or die(mysql_error());
		$num_rows = mysql_num_rows($query);
		if($num_rows>0) {
        	while($row=mysql_fetch_assoc($query))
				$data[]=$row;
		}
	    return $data;		
    }
	
	public function allProducts()
	{
		$query = mysql_query("SELECT * FROM `product`");

		while($row=mysql_fetch_assoc($query))
		{
		
			$data[]=$row;
		}

		if (empty($data)) 
		{
			?>	
  			 	<script type="text/javascript">

   					alert("No product are available insert new product");

   					window.location.href="product.php";

   				</script>

   				

   			<?php
		}
		else
		{
		  		return $data;
		}
	}
	
	public function getproductPhoto($id)
	{
		$photo = mysql_result(mysql_query("SELECT `p_img_name` FROM `product_image` WHERE `p_id` = '$id'"),0);	
				
		return $photo;
	}
	

	public function getProductDetails($id)
	{
		$query = mysql_query("SELECT * FROM product where p_id = $id");	
		while($row=mysql_fetch_assoc($query))
		$data=$row;
		
		return $data;
	
	}
	
	public function getAvailableSize($id)
	{
		$query = mysql_query("SELECT sizeID from tbl_productsizes where ProductID = $id");
		while($row=mysql_fetch_assoc($query))
		$data[]=$row;
		
		return $data;
	}
	
}
?>