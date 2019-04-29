
<?php
$base_url = "http://localhost/all-file/class44/myProject/web";


?>
<header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="index.php">fh
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
                    <form class="nav-search form-inline my-0 form-control" action="search.php" method="GET">
                         <!--<select class="form-control input-lg" name="category">
                            <option value="all">Search our store</option>
                        </select>-->
						<input type="search" name="data" value="<?php isset($_GET['data'])? $_GET['data'] : '';?>" class=" btn btn-outline-secondary" placeholder="Search" required="required"/>
                        <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" name='req' value="Search">
                    </form>
                    <!-- search form -->
                    <div class="nav-icon d-flex" >
                        <!-- sigin and sign up -->
						<?php
						if(isset($_SESSION['username'])){
							?>
							<div class="" style='margin-top:10px;'>
							<?php
							echo '&nbsp;&nbsp;'.$_SESSION['username'];
							?>
							</div>
							<?php
							echo '&nbsp;&nbsp;<a href="./logout.php" class="btn btn-outline-secondary align-self-center mx-3">logout</a>';
						} else {
							echo '<a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                            <i class="far fa-user"></i>
                        </a>';
						}
					?>
                        
                        <!-- sigin and sign up -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
                    </div>
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link " href="men.php" role="button" aria-haspopup="true" aria-expanded="false">Men's clothing</a>
                            <!--div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="men.php">T-Shirts</a>
                                            <a class="dropdown-item" href="men.php">Coats</a>
                                            <a class="dropdown-item" href="men.php">Shirts</a>
                                            <a class="dropdown-item" href="men.php">Suits & Blazers</a>
                                            <a class="dropdown-item" href="men.php">Jackets</a>
                                            <a class="dropdown-item" href="men.php">Trousers</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="men.php">T-Shirts</a>
                                            <a class="dropdown-item" href="men.php">Trousers</a>
                                            <a class="dropdown-item" href="men.php">Shirts</a>
                                            <a class="dropdown-item" href="men.php">Suits & Blazers</a>
                                            <a class="dropdown-item" href="men.php">Coats & Jackets</a>
                                            <a class="dropdown-item" href="men.php">Jackets</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="men.php">T-Shirts</a>
                                            <a class="dropdown-item" href="men.php">Coats</a>
                                            <a class="dropdown-item" href="men.php">Shirts</a>
                                            <a class="dropdown-item" href="men.php">Suits & Blazers</a>
                                            <a class="dropdown-item" href="men.php">Jackets</a>
                                            <a class="dropdown-item" href="men.php">Trousers</a>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link "  href="women.php" role="button" aria-haspopup="true" aria-expanded="false">Women's clothing</a>
                            <!--div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="women.php">Dresses</a>
                                            <a class="dropdown-item" href="women.php">T-shirts</a>
                                            <a class="dropdown-item" href="women.php">Skirts</a>
                                            <a class="dropdown-item" href="women.php">Jeans</a>
                                            <a class="dropdown-item" href="women.php">Tunics</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="women.php">T-shirts</a>
                                            <a class="dropdown-item" href="women.php">Dresses</a>
                                            <a class="dropdown-item" href="women.php">Tunics</a>
                                            <a class="dropdown-item" href="women.php">Skirts</a>
                                            <a class="dropdown-item" href="women.php">Jeans</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="women.php">Dresses</a>
                                            <a class="dropdown-item" href="women.php">T-shirts</a>
                                            <a class="dropdown-item" href="women.php">Skirts</a>
                                            <a class="dropdown-item" href="women.php">Jeans</a>
                                            <a class="dropdown-item" href="women.php">Tunics</a>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link "  href="girls.php" role="button" aria-haspopup="true" aria-expanded="false">Kids Clothing</a>
                            <!--div class="dropdown-menu" style="width:100%">
                                <div class="container">
                                    <div class="row w3_kids  py-3">
                                        <div class="col-md-3 ">
                                            <span class="bg-light">Boy's Clothing</span>
                                            <a class="dropdown-item" href="boys.php">T-Shirts</a>
                                            <a class="dropdown-item" href="boys.php">Coats</a>
                                            <a class="dropdown-item" href="boys.php">Shirts</a>
                                            <a class="dropdown-item" href="boys.php">Suits & Blazers</a>
                                            <a class="dropdown-item" href="boys.php">Jackets</a>
                                            <a class="dropdown-item" href="boys.php">Trousers</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item mt-4" href="boys.php">T-Shirts</a>
                                            <a class="dropdown-item" href="boys.php">Coats</a>
                                            <a class="dropdown-item" href="boys.php">Shirts</a>
                                            <a class="dropdown-item" href="boys.php">Suits & Blazers</a>
                                            <a class="dropdown-item" href="boys.php">Jackets</a>
                                            <a class="dropdown-item" href="boys.php">Trousers</a>
                                        </div>
                                        <div class="col-md-3">
                                            <span>Girl's Clothing</span>
                                            <a class="dropdown-item" href="girls.php">T-shirts</a>
                                            <a class="dropdown-item" href="girls.php">Dresses</a>
                                            <a class="dropdown-item" href="girls.php">Tunics</a>
                                            <a class="dropdown-item" href="girls.php">Skirts</a>
                                            <a class="dropdown-item" href="girls.php">Jeans</a>
                                            <a class="dropdown-item" href="girls.php">Midi</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item  mt-4" href="girls.php">Tunics</a>
                                            <a class="dropdown-item" href="girls.php">Skirts</a>
                                            <a class="dropdown-item" href="girls.php">T-shirts</a>
                                            <a class="dropdown-item" href="girls.php">Dresses</a>
                                            <a class="dropdown-item" href="girls.php">Jeans</a>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </li>
                        <!--li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li-->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>