<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php
session_start();
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
	

	
	//echo "<br>".$msg;
	if($file_size1 > 2097152){
	 $msg='File size must be less then 2 MB';
	}
	$file_name2 = $_FILES['image2']['name'];
	$file_size2 =$_FILES['image2']['size'];
	$file_tmp2 =$_FILES['image2']['tmp_name'];
	$file_type2=$_FILES['image2']['type'];
	
	//echo "<br>".$msg;
	if($file_size2 > 2097152){
	 $msg='File size must be less then 2 MB';
	}
	$file_name3 = $_FILES['image3']['name'];
	$file_size3 =$_FILES['image3']['size'];
	$file_tmp3 =$_FILES['image3']['tmp_name'];
	$file_type3=$_FILES['image3']['type'];
	
	//echo "<br>".$msg;
	if($file_size3 > 2097152){
	 $msg='File size must be less then 2 MB';
	}
	//echo "<br>".$msg;
	if($msg == ''){
		move_uploaded_file($file_tmp,"../images/product/".$file_name);
		$file_path = 'images/product/'.$file_name;
		 $sql = "insert into my_project.products (name, n_price, description, img, create_date,cat_id,quantity,status,is_featured	)
		values ( '$name', $price, '$message', '$file_path', NOW() , $cat, $quantity, 1, $isFeatured)";
		if ($conn->query($sql) === TRUE) {
			$sql2= "SELECT * FROM `my_project`.`products` WHERE status=1 and name like '%$file_name%'";
			$res = mysqli_query($conn, $sql2);
			$num = mysqli_num_rows($res);
			if($num){
				$row = mysqli_fetch_array($res);
				
					
					$id2 = $row['id'];
			
			move_uploaded_file($file_tmp1,"../images/product/".$file_name1);
			$file_path1 = 'images/product/'.$file_name1;
			move_uploaded_file($file_tmp2,"../images/product/".$file_name2);
			$file_path2 = 'images/product/'.$file_name2;
			move_uploaded_file($file_tmp3,"../images/product/".$file_name3);
			$file_path3 = 'images/product/'.$file_name3;
			 $sql3 = "insert into my_project.product_details (prod_id, n_price, details_descriptions, img_view_1, img_view_2,img_view_3)
			values ( '$id2', '$message2', '$message', '$file_path1', '$file_path2' , '$file_path3')";}
		if ($conn->query($sql) === TRUE) {
		$msg = "Product Uploaded Successfully";	}
		} else {
			$msg = "Product Upload Failed. Please Try again!";
		}
		$_SESSION['prod_success'] = $msg;
		$_SESSION['prod_error'] = "";
	} else {
		$_SESSION['prod_error'] = $msg;
	}
	
	
}
?>





<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	
		<!--left-fixed -navigation-->
		<?php include('layout/menu.php')?>
		<!-- header-starts -->
		<?php include('layout/heder.php')?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" style='margin-left:0;'>
		
		
		<div class="container-fluid text-center" align="center" >    
  <div class="row content" align="center">
    <div class="container" align="center">
		<div class="alert-danger">
			<?php echo '<h1>'.$_SESSION['prod_error'].'</h1>'; ?>
		</div>
		<div class="alert-success">
			<?php echo '<h1>'.$_SESSION['prod_success'].'</h1>'; ?>
		</div>
        <div class="row justify-content-center" align="center">
            <div class="media-container-column col-lg-12" data-form-type="formoid" align="center" >
				<form style='margin-left:0;margin-right:6%;' action="upload.php" method="post" enctype="multipart/form-data" class="from-group">
					<div class="row row-sm-offset">
						<div class="col-md-3 multi-horizontal" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="name-form1-2w">Name</label>
								<input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-2w">
							</div>
						</div>
						<div class="col-md-3 multi-horizontal" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="name-form1-2w">New Price</label>
								<input type="text" class="form-control" name="price" data-form-field="Name" required="" id="name-form1-2w">
								
							</div>
							
						</div>
						<div class="col-md-3 multi-horizontal" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="name-form1-2w">Old Price</label>
								<input type="text" class="form-control" name="oprice" data-form-field="Name" required="" id="name-form1-2w">
								
							</div>
							
						</div>
						<div class="col-md-3 multi-horizontal" data-for="phone">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="phone-form1-2w">Quantity</label>
								<input type="tel" class="form-control" name="quantity" data-form-field="Phone" id="phone-form1-2w">
							</div>
						</div>
					</div>
					<div class="col-md-6 form-group" data-for="message">
						<label class="form-control-label mbr-fonts-style display-7" for="message-form1-2w">	Description</label>
						<textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-2w"></textarea>
					</div>
					<div class="col-md-6 form-group" data-for="message">
						<label class="form-control-label mbr-fonts-style display-7" for="message-form1-2w">	Bref Description</label>
						<textarea type="text" class="form-control" name="message2" rows="7" data-form-field="Message" id="message-form1-2w"></textarea>
					</div>
					<div class="row row-sm-offset">
						<div class="col-md-4 multi-horizontal" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="name-form1-2w">Vew Image 1</label>
								<input type="file" class="form-control" name="image1" required="" id="name-form1-2w">
							</div>
						</div>
						<div class="col-md-4 multi-horizontal" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="name-form1-2w">Vew Image 2</label>
								<input type="file" class="form-control" name="image2" required="" id="name-form1-2w">
							</div>
						</div>
						<div class="col-md-4 multi-horizontal" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="name-form1-2w">Vew Image 3</label>
								<input type="file" class="form-control" name="image3" required="" id="name-form1-2w">
							</div>
						</div>
						<div class="col-md-6 multi-horizontal" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="name-form1-2w">First Image</label>
								<input type="file" class="form-control" name="image" required="" id="name-form1-2w">
							</div>
						</div>
						
						<div class="col-md-6 multi-horizontal" data-for="phone">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-2" for="phone-form1-2w">Product Category </label>
								<select class="form-control" name="cat">
									<option value="1">MEN'S CLOTHING</option>
									<option value="2">WOMEN'S CLOTHING</option>
									<option value="3">KIDS CLOTHING</option>
								</select>
							</div>
						</div>
					</div>
					<input name="sub" type="submit" class="btn btn-primary col-md-12" value="Confirm Product Upload">
				</form>
            </div>
        </div>
    </div>
    
  </div>
</div>
		
		
		
		
		
		
		
		
		
		</div>
	<!--footer-->
	
		
	<!-- new added graphs chart js-->
	<?php include('layout/footer.php')?>
   
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>