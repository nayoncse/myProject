<?php
include('db.php');


//print_r($_GET);
$id = isset($_GET['id']) ? $_GET['id'] : '';
$result = '';
$num = 0;
if($id != ''){
	$sql_prod = "SELECT * FROM products AS p
LEFT JOIN `product_details` AS pd ON p.id=pd.`prod_id`
WHERE STATUS=1 AND p.id=$id";
	$res = mysqli_query($conn, $sql_prod);
	$num = mysqli_num_rows($res);
	if($num){
		$row_prod = mysqli_fetch_array($res);
		/* $res_color = mysqli_query($conn, "SELECT * FROM `prod_color`");
		$prod_color = [];
		while($row = mysqli_fetch_array($res_color)){
			$prod_color[$row['id']] = $row['color_name'];
		}
		$res_size = mysqli_query($conn, "SELECT * FROM `prod_size`"); 
		$prod_size = [];
		$prod_width = [];
		$prod_length = [];
		while($row = mysqli_fetch_array($res_size)){
			$prod_size[$row['id']] = $row['size'];
			$prod_width[$row['id']] = $row['width'];
			$prod_length[$row['id']] = $row['length'];
		} */
	} else {
		$result =  '<div align="center" style="color:red;font-size:30px;"> Product Not Found!</div>';
	}
} else {
	$result =  '<div align="center" style="color:red;font-size:30px;"> Product Not Found!</div>';
}

?>