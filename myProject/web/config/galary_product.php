<?php
session_start();
include('db.php');
$msg = [];
//if(isset($_POST['req'])){
	$sql  = "SELECT * FROM galary_product WHERE g_status=1";
	$res = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($res);
	if($num){
		//$msg['status'] = '1';
		//$msg['count'] = $num;
		//$i = 0;
		
		while($row = mysqli_fetch_array($res)){
			$product = [];
			$product['id'] = $row['id'];
			$product['g_image'] = $row['g_image'];
			$product['g_like'] = $row['g_like'];
			$product['g_comment'] = $row['g_comment'];
			
			
			array_push($msg, $product);
		}
		
	} else {
		$msg['status'] = '0';
		$msg['msg'] = 'No Product Found!';
	}
/* } else {
	$msg['status'] = '0';
	$msg['msg'] = 'Invalid Request!';
} */

//echo "<pre>"; 
print_r(json_encode($msg));
//return $msg;
?>


