<?php
session_start();
include('db.php');
$msg = [];
//if(isset($_POST['req'])){
	$sql  = "SELECT * FROM `site_descreption` ORDER BY id DESC LIMIT 3";
	$res = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($res);
	if($num){
		//$msg['status'] = '1';
		//$msg['count'] = $num;
		//$i = 0;
		
		while($row = mysqli_fetch_array($res)){
			$product = [];
			$product['id'] = $row['id'];
			$product['site_image'] = $row['site_image'];
			$product['site_name'] = $row['site_name'];
			$product['site_link'] = $row['site_link'];
			
			
			
			
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


