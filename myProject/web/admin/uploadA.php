
<?php 
error_reporting(0);
session_start();
/* var_dump ($_SESSION);
die(); */
if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']==1){
	//vaild user
} else {
	//invalid user logout and go to login page.
	header("Location: index.php");
	die();
}
?>

<?php 
include('../config/db.php');
$msg= "";
$_SESSION['prod_error'] = "";
$_SESSION['prod_success'] = "";
if(isset($_POST['sub'])){
	$name = isset($_POST['name']) ? mysqli_real_escape_string($conn,$_POST['name']) : '';
	$price = isset($_POST['price']) ? mysqli_real_escape_string($conn,$_POST['price']) : '';
	$oprice = isset($_POST['oprice']) ? mysqli_real_escape_string($conn,$_POST['oprice']) : '';
	$quantity = isset($_POST['quantity']) ? mysqli_real_escape_string($conn,$_POST['quantity']) : '';
	$message = isset($_POST['message']) ? mysqli_real_escape_string($conn,$_POST['message']) : '';
	$message2 = isset($_POST['message2']) ? mysqli_real_escape_string($conn,$_POST['message2']) : '';
	$isFeatured = isset($_POST['isFeatured']) ? mysqli_real_escape_string($conn,$_POST['isFeatured']) : '';
	if($isFeatured == 'on'){$isFeatured = 1; }else{$isFeatured=0;}
	$cat = isset($_POST['cat']) ? mysqli_real_escape_string($conn,$_POST['cat']) : '';
	// image check
	$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	$extensions= array("jpeg","jpg","png");

	if(in_array($file_ext,$extensions)=== false){
	 $msg="Invalid file, please choose a JPEG or PNG file.";
	}
	//echo "<br>".$msg;
	if($file_size > 2097152){
	 $msg='File size must be less then 2 MB';
	}
	$file_name1 = $_FILES['image1']['name'];
	$file_size1 =$_FILES['image1']['size'];
	$file_tmp1 =$_FILES['image1']['tmp_name'];
	$file_type1=$_FILES['image1']['type'];
	$file_ext1=strtolower(end(explode('.',$_FILES['image1']['name'])));
	

	if(in_array($file_ext1,$extensions)=== false){
	 $msg="Invalid file, please choose a JPEG or PNG file.";
	}

	
	//echo "<br>".$msg;
	if($file_size1 > 2097152){
	 $msg='File size must be less then 2 MB';
	}
	$file_name2 = $_FILES['image2']['name'];
	$file_size2 =$_FILES['image2']['size'];
	$file_tmp2 =$_FILES['image2']['tmp_name'];
	$file_type2=$_FILES['image2']['type'];
	$file_ext2=strtolower(end(explode('.',$_FILES['image2']['name'])));
	

	if(in_array($file_ext2,$extensions)=== false){
	 $msg="Invalid file, please choose a JPEG or PNG file.";
	}
	//echo "<br>".$msg;
	if($file_size2 > 2097152){
	 $msg='File size must be less then 2 MB';
	}
	$file_name3 = $_FILES['image3']['name'];
	$file_size3 =$_FILES['image3']['size'];
	$file_tmp3 =$_FILES['image3']['tmp_name'];
	$file_type3=$_FILES['image3']['type'];
	$file_ext3=strtolower(end(explode('.',$_FILES['image3']['name'])));
	

	if(in_array($file_ext3,$extensions)=== false){
	 $msg="Invalid file, please choose a JPEG or PNG file.";
	}
	//echo "<br>".$msg;
	if($file_size3 > 2097152){
	 $msg='File size must be less then 2 MB';
	}
	//echo "<br>".$msg;
	if($msg == ''){
		move_uploaded_file($file_tmp,"../images/product/".$file_name);
		$file_path = 'images/product/'.$file_name;
		$sql = "insert into my_project.products (name, n_price,o_price, description, img, create_date,cat_id,quantity,status,is_featured	)
		values ( '$name', $price,$oprice, '$message', '$file_path', NOW() , $cat, $quantity, 1, $isFeatured)";
		if ($conn->query($sql) === TRUE) {
			$sql2= "SELECT * FROM `my_project`.`products` WHERE status=1 and name = '$name' order by id desc limit 1";
			$res = mysqli_query($conn, $sql2);
			 $num = mysqli_num_rows($res);
			if($num){
				$row = mysqli_fetch_array($res);
				
					
					$id2 = $row['id'];
			
			move_uploaded_file($file_tmp1,"../images/".$file_name1);
			$file_path1 = 'images/product/'.$file_name1;
			move_uploaded_file($file_tmp2,"../images/product/".$file_name2);
			$file_path2 = 'images/product/'.$file_name2;
			move_uploaded_file($file_tmp3,"../images/product/".$file_name3);
			$file_path3 = 'images/product/'.$file_name3;
			$sql3 = "insert into my_project.product_details (prod_id, details_descriptions, img_view_1, img_view_2,img_view_3)
			values ( '$id2', '$message2', '$file_path1', '$file_path2' , '$file_path3')";
			if ($conn->query($sql3) === TRUE) {
		$msg = "Product Uploaded Successfully";	}
		} else {
			$msg = "Product Upload Failed. Please Try again!";
		}
			}
			//die();
		
		$_SESSION['prod_success'] = $msg;
		$_SESSION['prod_error'] = "";
		header("Location: upload.php");
	} else {
		$_SESSION['prod_error'] = $msg;
		header("Location: upload.php");
	}
	
	
}
?>