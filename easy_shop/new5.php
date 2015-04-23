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

	
	

	
?>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							
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
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							
							
							
								
								<li><a href="profile.php?id=3"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php?action=show"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php if(empty($_SESSION['login_user'])){echo "log-in.php";} else{echo "logout.php";}?>"><i class="fa fa-lock"></i><?php if(empty($_SESSION['login_user'])){echo "Login";} else{echo "Logout";}?></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	

	<section id="cart_items">
		<div class="container">
			
				
				  <?php 
// Define $username and $password
		$name=$_POST['name'];
		$add=$_POST['add'];
		$pin=$_POST['pin'];
		$phone=$_POST['phone'];
		//echo $name."<br>".$add."<br>".$pin."<br>"."<br>";
		/*
$query = "SELECT * FROM delivery_details where Name='$name'";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
$rows = mysql_num_rows($result);
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysql_fetch_row($result);
echo 'Name: ' . $row[0] . '<br />';
echo 'Pincode: ' . $row[1] . '<br />';
echo 'Address: ' . $row[2] . '<br />';
echo 'Phone: ' . $row[3] . '<br />';
}*/
if(!empty($_SESSION['cart'])) {	//if the cart isn't empty
		//show the cart
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
					?>
					<div id="main" style="">
		
					

<?php }
}
}
else{
	echo "cart empty";
}
?>
<div style="position:relative;left:0px;background-color:#FFFFCC;">
	    <h2 style="color:orange;">SHIPPING DETAILS</h2>
		<strong style="color:#500000">NAME:</strong><?php echo $name;?><br>
		<strong style="color:#500000">SHIPPING ADDRESS:</strong><?php echo $add;?><br>
		<strong style="color:#500000">PINCODE:</strong><?php echo $pin;?><br>
		<strong style="color:#500000">PHONE:</strong><?php echo $phone;?><br>
	
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
									<?php echo $quantity ?>
								</div>
							</td>
                            
							<?php }}?>
							 <td class="paypal">
								<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RH8NM964G2FQG">
<input type="hidden" name='cancel_return' value='http://localhost/cart.php'>
<input type="hidden" name='return' value='http://localhost/home.php'>
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

							</td>
							
							
						</tr>
						

						
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						
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
		
		<td><p>  </p></td>
		
		            </tr>
					</table>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->


	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>