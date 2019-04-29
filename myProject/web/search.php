<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); 
include('config/db.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| Men :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!-- shop css -->
	<link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/flexslider.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- Range-slider-css -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">

	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
	 <!-- header -->
 <?php include('layout/heder.php');?>
    <!-- //header -->
	<!-- inner banner -->
	<!--<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span>f</span>ashion
			<span>h</span>ub</h4>
	</div>-->
	<!-- //inner banner -->
	<!-- breadcrumbs -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<h6 class="subhead theme"><strong>YOUR SEARCH ITEMS HEARE......</strong></h6>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- Shop -->
								<div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5" style="  margin-left:px;">
				<!-- grid left -->
				
				<!-- //grid left -->
				
				
				  
					
					
					
								<?php
					if(isset($_GET['req'])){
						$limit =5;
						if(isset($_GET['page'])){
							$page = $_GET['page'];
						}else{
							$page= 1;
						}
						$start_from =($page-1)* $limit;
						$data = mysqli_real_escape_string($conn, isset($_GET['data'])? $_GET['data'] : '');
						$sql = "SELECT * FROM products WHERE status=1 and name like '%$data%' LIMIT $start_from, $limit ";
						$res = mysqli_query($conn, $sql);
								$num = mysqli_num_rows($res);
								$msg = [];
								if($num){
									?>
									

		
			  
									<?php
									while($row = mysqli_fetch_array($res)){
										
										?>
					
								
							
							
							
							
			
				
					
					
                        <div class="item" style="   width:230px; margin-left:25px; margin-top:20px;" >
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img  src="<?php  echo $row['img'];?>" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.php?id=<?php echo $row['id']; ?>" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2" >
                                    <h5 class="card-title text-capitalize"><?php  echo $row['name']; ?></h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$<?php  echo $row['n_price']; ?></p>
                                        <p class="line-through">$<?php  echo $row['o_price']; ?></p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="<?php   echo $row['name']; ?>">
                                        <input type="hidden" name="amount" value="<?php  echo $row['n_price']; ?>">
                                        <a href="checkout.php?id=<?php echo $row['id']; ?>" class="hub-cart phub-cart btn" >
									   
                                            <i class="fa fa-cart-plus" aria-hidden="true">Buy Product</i>
                                        
										</a>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
             
                      
					            <?php 
			} ?>
									</div>
									<div style="   margin-left:50%; margin-button:70px;" >
									<?php  
										/* pagination 1 */
										$sql = "SELECT COUNT(id) FROM products WHERE status=1 and name like '%$data%'";  
										$rs_result = mysqli_query($conn, $sql);  
										$row = mysqli_fetch_array($rs_result);  
										$total_records = $row[0];  
										$total_pages = ceil($total_records / $limit);  
										$pagLink = "<div class='pagination'>";								
										
										for ($i=1; $i<=$total_pages; $i++) { 
											if($i == $page){
												$pagLink .= "<a href='search.php?req=data&page=".$i."&data=".$data."' class='btn btn-primary'>".$i."</a>";  
											} else {
												$pagLink .= "<a href='search.php?req=data&page=".$i."&data=".$data."' class='btn'>".$i."</a>";  
											}													 
										} 
										echo $pagLink . "</div>"; 
										/* pagination 1 */										
										?>
										</div>
										
										<?php
								} else {
									echo "<div>No Product found. Please try again.</div>";
								}
								?>
								 
						 <!-- End tab-content -->
						<?php
							} else {
								echo "<div>Page Not Found!</div>";
							}
							?>	  
                       
                
				<!-- grid right -->
				
				
			</div>
		</div>
		
		<!--// Shop -->
	 <?php include('layout/footer.php');?>
    <!-- //footer -->
    <!-- sign up Modal -->
    <?php include('layout/registation.php');?>
    <!-- //signup modal -->
    <!-- signin Modal -->
   <?php include('layout/login.php');?>
    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			hub.render();

			hub.cart.on('new_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->
		<script src="js/bootstrap.js"></script>
		<!-- start-smoth-scrolling -->
		<script src="js/move-top.js"></script>
		<script src="js/easing.js"></script>
		<script>
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
		<script>
			$(document).ready(function () {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<!-- //here ends scrolling icon -->
		<!-- smoothscroll -->
		<script src="js/SmoothScroll.min.js"></script>
		<!-- //smoothscroll -->
		<?php include('layout/myscripte.php');?>
</body>

</html>