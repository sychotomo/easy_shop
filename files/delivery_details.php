<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | Easy-Shop</title>
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
<style>
h1 {
    text-align: center;
}
</style>

<div style="text-align: center;"><IMG SRC="asd.jpg" ALT="image" ></div>


<?php require_once 'login.php';
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['pincode']) || empty($_POST['address']) || empty($_POST['phone'])) {
$error = "Please Fill al the Fields!";
}
else
{
// Define $username and $password
$name=$_POST["name"];
$pincode=$_POST['pincode'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$userid=$_SESSION['login_user'];
//echo $name;
if(!empty($_SESSION['cart'])) {	//if the cart isn't empty
		//show the cart
		//echo "<table border=\"1\" padding=\"3\" width=\"40%\">";	//format the cart using a HTML table
		
			//iterate through the cart, the $product_id is the key and $quantity is the value
			foreach($_SESSION['cart'] as $product_id => $quantity) {	
				
				//get the name, description and price from the database - this will depend on your database implementation.
				//use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
				$sql = sprintf("SELECT id FROM items WHERE id = %d;",
								$product_id); 
					
				$result1 = mysql_query($sql);
				//Only display the row if there is a product (though there should always be as we have already checked)
				if(mysql_num_rows($result1) > 0) {
				
					list($pid) = mysql_fetch_row($result1);
$query = "INSERT INTO delivery_details VALUES('$name','$pincode','$address','$phone','$userid','$pid')";

$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
}
}
}
}
}

?>
<div style="width:700px;position:relative;left:270px;">
<form method="post" action="new5.php">
	<input type="text" name="name" value="<?php echo $name;?>" hidden>
	<input type="text" name="add" value="<?php echo $address;?>" hidden>
	<input type="text" name="pin" value="<?php echo $pincode;?>" hidden>
	<input type="text" name="phone" value="<?php echo $phone;?>" hidden>
	<input type="submit" value="PROCEED" class="btn btn-warning btn-lg btn-block" style="position:relative;left:0px;top:20px">
</form>
</div>


	</body>
	</html>