<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 

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
				<form style='margin-left:0;margin-right:6%;' action="uploadA.php" method="post" enctype="multipart/form-data" class="from-group">
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