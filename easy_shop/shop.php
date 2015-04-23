<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
		<style>
	.product-overlay
	{
	background-color:rgba(0,0,204,0.1);
	}
	</style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 00000000</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i> </a></li>
								<li><a href="https://www.linkdin.in"><i class="fa fa-linkedin"></i> </a></li>
								<li><a href="https://www.dribble.com"><i class="fa fa-dribbble"></i> </a></li>
								<li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i> </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="home.php"><img src="imgs/logo.jpg" height="50px" width="200px"/></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									REGION
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">NCR</a></li>
									<li><a href="#">GHAZIABAD</a></li>
									<li><a href="#">allahabad</a></li><li>
									<li><a href="#">lucknow</a></li>
									<li><a href="#">kanpur</a></li>
									<li><a href="#">varanasi</a></li>
									<li><a href="#">guwahati</a></li>
									<li><a href="#">jammu</a></li>
								</ul>
							</div>
							
							<!--<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>-->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<?php 
							if(empty($_SESSION['login_user']))
							{
							echo "<li><a href='log-in.php?error=404'><i class='fa fa-user'></i>Account</a></li>";
							
							}							
							else
							{
							echo "<li><a href='account.php'><i class='fa fa-user'></i><strong>Hello </strong>".$_SESSION['login_user']."!</a></li>";
							}?>
							
							
								
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php if(empty($_SESSION['login_user'])){echo "log-in.php";} else{echo "logout.php";}?>"><i class="fa fa-lock"></i><?php if(empty($_SESSION['login_user'])){echo "Login";} else{echo "Logout";}?></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="home.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="products.php">Products</a></li>
										<li><a href="#">Product Details</a></li> 
										<li><a href="#">Checkout</a></li> 
										<li><a href="#">Cart</a></li> 
										<li><a href="log-in.php">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<form  method="post" action="shop.php?go"  id="searchform"> 
	      <input  type="text" name="name"><input  type="submit" name="submit" value="Search"> 
	    </form> 
	    </form> 
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="advertisement">
		<div class="container">
			<!--<img src="images/shop/advertisement.jpg" alt="" />-->
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="nike.php?name=Nike">Nike </a></li>
											<li><a href="nike.php?name=Nike">Puma </a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="nike.php?name=Peter England">Peter England</a></li>
											<li><a href="nike.php?name=Mannat">mannat</a></li>
											<li><a href="nike.php?name=Levis">Levis</a></li>
											<li><a href="mike.php?name=Wrangler">Wrangler</a></li>
											<li><a href="nike.php?name=Pantaloons">Pantaloon</a></li>
											<li><a href="nike.php?name=Max">Max</a></li>
											<li><a href="nike.php?name=Gucchi">Gucchi</a></li>
											<li><a href="nike.php?name=Ucb">United Colors Of Benetton</a></li>
				
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="nike.php?name=Puma">Puma</a></li>
											<li><a href="nike.php?name=Gucchi">Gucchi</a></li>
											<li><a href="nike.php?name=Ucb">United Colors Of Benetton</a></li>
											<li><a href="nike.php?name=Wrangler">Wrangler</a></li>
											<li><a href="nike.php?name=Levis">Levis</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="nike.php?name=Kids">Kids</a></h4>
								</div>
							</div>
					
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="nike.php?name=HouseHolds">Households</a></h4>
								</div>
							</div>
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="nike.php?name=Bags">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="nike.php?name=Shoes">Shoes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="nike.php?name=Electronics">Electronics</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="nike.php?name=Gucchi"> <span class="pull-right">(50)</span>Gucchi</a></li>
									<li><a href="nike.php?name=Wrangler"> <span class="pull-right">(56)</span>Wrangler</a></li>
									<li><a href="nike.php?name=Puma"> <span class="pull-right">(27)</span>Puma</a></li>
									<li><a href="nike.php?name=Levis"> <span class="pull-right">(32)</span>Levis</a></li>
									<li><a href="nike.php?name=Apple"> <span class="pull-right">(5)</span>Apple</a></li>
									<li><a href="nike.php?name=Rajauri"> <span class="pull-right">(9)</span>Rajauri</a></li>
									<li><a href="nike.php?name=Ucb"> <span class="pull-right">(4)</span>United Colors Of Benetton</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							
							<div class="well">
								 
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<!--<img src="images/home/shipping.jpg" alt="" />-->
						</div><!--/shipping-->
						
					</div>
					
				</div>
				<div class="col-sm-9" style="">
				<h2 class="title text-center">SEARCH RESULT</h2>
				<?php
				 
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $type=$_POST['name']; 
	  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
	  $mydb=mysql_select_db("easy_shop"); 
	  //-query  the database table 
	  $sql="SELECT  product, id, brand,type,price,image_name FROM items WHERE type LIKE '%"  . $type .  "%'" ; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql) or die(mysql_error());
	  
	  $rows=mysql_num_rows($result);
	   for($j=0;$j<$rows;$j++){	
	  $row=mysql_fetch_row($result); 
	          $brand=$row[2]; 
	          $price=$row[4]; 
			  $image=$row[5];
			  $product=$row[0];
			  $id=$row[1];
	  ?>
	 
	  
	  
	  
	  						
    
	<div class="col-sm-4" style="">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="data/<?php echo $image?>" alt="" height="300px" width="100px" style=""/>
												<!--<h2>Rs.</h2>-->
											<!--<p></p>-->
											<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
											<h2 style="color:orange"><?php echo $product?></h2>
												<p style="color:orange">Rs.<?php echo $price?></p>
												<a href="" class="btn btn-default add-to-cart" style="opacity:0.0"><i class="fa fa-shopping-cart"></i></a><br>
												
												
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2 style="color:orange"><?php echo $product?></h2>
												<p style="color:orange">Rs.<?php echo $price?></p>
												<a href="<?php echo "cart.php?action=add&id=$id";?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a><br>
											
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>-->
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>-->
									
										<div class="btn-group">
												 
												<a class="btn btn-default" type="button" href="product-details.php?id=<?php echo $id?>"><p style="color:orange"><span class="glyphicon glyphicon-send"></span>SHOP NOW</p></a>
										<a class="btn btn-default" type="button" href="#"></span><p style="color:orange"> <span class="glyphicon glyphicon-star"></span>ADD TO WISH LIST</p></a>
										</div>
										</ul>
									</div>
							</div>
						<br>
						</div>
						<?php }}}}?>
			</div>
		</div>
	</section>
	<!--
	<footer id="footer"><!--Footer--><!--
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-Shopper. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>