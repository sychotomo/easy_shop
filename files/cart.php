<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | Easy-Shop</title>
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
</head><!--/head-->

<body>
<?php require_once 'login.php'; 
if(!empty($_GET['id'])){
	$product_id = $_GET['id'];	 //the product id from the URL 
	 //the action from the URL 

	//if there is an product_id and that product_id doesn't exist display an error message
	if($product_id && !productExists($product_id)) {
		die("Error. Product Doesn't Exist");
	}}
	
	$action = $_GET['action'];
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
	}
	switch($action) {	//decide what to do	
	
		case "add":
			$_SESSION['cart'][$product_id] = 1 + (isset($_SESSION['cart'][$product_id]) ? $_SESSION['cart'][$product_id] : 0); //add one to the quantity of the product with id $product_id 
		break;
		case "remove":
			$_SESSION['cart'][$product_id]--; //remove one from the quantity of the product with id $product_id 
			if($_SESSION['cart'][$product_id] == 0) unset($_SESSION['cart'][$product_id]); //if the quantity is zero, remove it completely (using the 'unset' function) - otherwise is will show zero, then -1, -2 etc when the user keeps removing items. 
		break;
		
		case "empty":
			unset($_SESSION['cart']); //unset the whole cart, i.e. empty the cart. 
		break;
	case "show":
	//$_SESSION['cart'][$product_id] = (isset($_SESSION['cart'][$product_id]) ? $_SESSION['cart'][$product_id] : 0);
	break;
	}
?>
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
							<!--<div class="btn-group">
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
							</div>-->
							
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
							echo "<li><a href='profile.php?id=1'><i class='fa fa-user'></i><strong>Hello </strong>".$_SESSION['login_user']."!</a></li>";
							}?>
							
							
								
								<li><a href="profile.php?id=3"><i class="fa fa-star"></i> Wishlist</a></li>
							<?php if(!empty($_SESSION['cart'])){?>	<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li><?php } ?>
								<li><a href="cart.php?action=show"><i class="fa fa-shopping-cart"></i> Cart</a></li>
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
									<!--	<li><a href="product-details.html">Product Details</a></li> -->
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.php">Cart</a></li> 
										<li><a href="log-in.php">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
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
	>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Brand</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="quantity">Paypal</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php	

	if(!empty($_SESSION['cart'])) {	//if the cart isn't empty
		//show the cart
		
		$total=0;
		//echo "<table border=\"1\" padding=\"3\" width=\"40%\">";	//format the cart using a HTML table
		
			//iterate through the cart, the $product_id is the key and $quantity is the value
			foreach($_SESSION['cart'] as $product_id => $quantity) {	
				
				//get the name, description and price from the database - this will depend on your database implementation.
				//use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
				$sql = sprintf("SELECT brand,image_name, price FROM items WHERE id = %d;",
								$product_id); 
					
				$result = mysql_query($sql);
				//Only display the row if there is a product (though there should always be as we have already checked)
				if(mysql_num_rows($result) > 0) {
				
					list($brand, $image_name, $price) = mysql_fetch_row($result);
					$line_cost = $price * $quantity;		//work out the line cost
					$total = $total + $line_cost;			//add to the total cost
				
					/*echo "<tr>";
						//show this information in table cells
						echo "<td align=\"center\">$name</td>";
						//along with a 'remove' link next to the quantity - which links to this page, but with an action of remove, and the id of the current product
						echo "<td align=\"center\">$quantity <a href=\"$_SERVER[PHP_SELF]?action=remove&id=$product_id\">X</a></td>";
						echo "<td align=\"center\">$line_cost</td>";
					
					echo "</tr>";*/
					
				
			?>
						<tr>
							<td class="cart_product">
								<img src="data/<?php echo $image_name ?>" height="50px" width="50px">
							</td>
							<td class="cart_description">
								<h4><?php echo $brand ?></h4>
							</td>
							<td class="cart_price">
								<p><?php echo $line_cost ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="<?php echo "$_SERVER[PHP_SELF]?action=add&id=$product_id"?>"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $quantity ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="<?php echo "$_SERVER[PHP_SELF]?action=remove&id=$product_id"?>"> - </a>
								</div>
							</td>
                            
							<?php }}?>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo "$_SERVER[PHP_SELF]?action=empty\" onclick=\"return confirm('Are you sure?')"?>"><i class="fa fa-times"></i></a>
							</td>
							
						</tr>
						

						
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update">Get Quotes</a>
						<a class="btn btn-default check_out">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><?php echo $total ?></span></li>
							<li>Eco Tax <span>$10</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span><?php echo $total+10 ?></span></li>
						</ul>
						<?php }
							else{
		
		echo"<div class='alert alert-danger' role='alert'>You have no items in your shopping cart.</div>";
		}?>
		<?php function productExists($product_id) {
			//use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
			$sql = sprintf("SELECT * FROM items WHERE id = %d;",
							$product_id); 
				
			return mysql_num_rows(mysql_query($sql)) > 0;
	}?>
		<!--<a class="btn btn-default update" href="products.php">Continue Shopping</a>-->
		<table>
		<tr>
		<td><a type="button" class="btn btn-danger" href="products.php">Continue Shopping</a></td>
		<td><p>  </p></td>
		<?php if(!empty($_SESSION['cart'])){?><td><a type="button" class="btn btn-danger" href="checkout.php">Checkout</a></td><?php } ?>
		            </tr>
					</table>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<!--
	<footer id="footer"><!--Footer--><!--
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Easy</span>-Shop</h2>
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
								<li><a href="">Privacy Policy</a></li>
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
							<form  method="" action="" class="searchform">
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
					<p class="pull-left"></p>
					<p class="pull-right"><span><a target="_blank" href=""></a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>