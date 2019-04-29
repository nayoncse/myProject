<?php
session_start();
include('db.php');
$msg = [];
//if(isset($_POST['req'])){
	$sql  = "SELECT * FROM `products` WHERE STATUS=1 AND cat_id=2";
	$res = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($res);
	if($num){
		//$msg['status'] = '1';
		//$msg['count'] = $num;
		//$i = 0;
		
		while($row = mysqli_fetch_array($res)){
			$product = [];
			$product['id'] = $row['id'];
			$product['w_pimage'] = $row['img'];
			$product['w_pname'] = $row['name'];
			$product['w_pnewPrice'] = $row['n_price'];
			$product['w_poldPrice'] = $row['o_price'];
			
			
			
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


