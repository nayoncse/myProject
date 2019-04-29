
<?php 
error_reporting(0);
session_start();
if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']==1){
	//vaild user
} else {
	//invalid user logout and go to login page.
	header("Location: index.php");
	//die();
}
?>



<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<?php
						if(isset($_SESSION['username'])){
							?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p><?php
							echo '&nbsp;&nbsp;'.$_SESSION['username'];
							?></p>
										<span>Administrator</span>
									</div>
									
								</div>	
							</a>
						
							
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<!--//end-search-box-->
				
				<div class="profile_details">		
					<ul>
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> 	<?php
							echo 'logout';
						} else {
							echo '<a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                            <i class="far fa-user"></i>
                        </a>';
						}
					?></a></li>
      </ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>