<!DOCTYPE html>
<?php
ob_start();
session_start();
//echo $_SESSION['login_user'];

?>
<html lang="en">
<head>
    
    <title>EASY-SHOP</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <style><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EASY-SHOP</title>
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

<style>

	input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
	
	
	form{
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:450px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
	
	
	#highlight{
	background:#FFA500;
	width:1365px;
	height:70px;
	margin-bottom:15px;
	}
	
	</style>

<body>
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
									<li><a href="#">Noids</a></li>
									<li><a href="#">GHAZIABAD</a></li>
									<li><a href="#">New Delhiu</a></li><li>
									<li><a href="#">Banglore</a></li>
									<li><a href="#">Kolkata</a></li>
									
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
								<?php if(!empty($_SESSION['cart'])){?>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<?php } ?>
								<li><a href="cart.php?action=show"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php if(empty($_SESSION['login_user'])){echo "log-in.php";} else{echo "logout.php";}?>"><i class="fa fa-lock"></i><?php if(empty($_SESSION['login_user'])){echo "Login";} else{echo "Logout";}?></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div id="form">
        <div id="input">
		
		<html>
<body>
<legend></legend>


<form style="margin-left:430px" class="form-horizontal" action="delivery_details.php" method="post">

<fieldset>

<!-- Form Name -->



<!-- Text input-->
<div class="control-group">
  <label  style="color:green" class="control-label" for="">Name</label>
  <div class="controls">
    <input id="" name="name" type="text" placeholder="Enter Your name" class="input-xlarge" required="">
    <p class="help-block"></p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" style="color:green" for="textinput">Pincode</label>
  <div class="controls">
    <input id="textinput" name="pincode" type="text" placeholder="Enter Six digit pincode" class="input-xlarge">
    <p class="help-block"></p>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" style="color:green" for="textarea">Address</label>
  <div class="controls">                     
    <textarea id="textarea" name="address" placeholder="Enter Your Address" ></textarea>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" style="color:green" for="textinput">Phone</label>
  <div class="controls">
    <input id="textinput" name="phone" type="text" placeholder="Phone No." class="input-xlarge">
    <p class="help-block"></p>
  </div>
</div>

<!-- Button -->
<div class="control-group">

  <label class="control-label" style="color:green" for="singlebutton">Submit</label>
  <div class="controls">
    <input id="submit" name="submit" type="submit" class="btn btn-primary"></button>
  </div>
</div>

</fieldset>
</form>
</div>

</body>
</html>
	
		
	</header><!--/header-->
	
	<section id="slider">
	
	
	
	
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>