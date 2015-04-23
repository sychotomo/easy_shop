<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript">
	function checkforblank()
	{
	if(document.getElementById('password').value == ""  && 	document.getElementById('userid').value == "")
	{
	alert('Please enter USERNAME and PASSWORD!');
	return false;
	}
	if(document.getElementById('password').value == "")
	{
	alert('Please enter PASSWORD!');
	return false;
	}
	if(document.getElementById('userid').value == "")
	{
	console.log('userid of login not submitted!');
	alert('Please enter USERNAME!');
	return false;
	}
	}
	function checkforblank2()
	{
		if(document.getElementById('fpassword').value.localeCompare(document.getElementById('fcpassword').value)!=0)
	{
	console.log('PASSWORD not matching!');
	alert('PASSWORD doesnt match!');
	return false;
	}
	if( document.getElementById('ffirstname').value == "" || document.getElementById('flastname').value == "" || document.getElementById('femail').value == "" || document.getElementById('username').value == "" || document.getElementById('fpassword').value == "" )
	{
	console.log('pagal h kya?');
	alert('PLEASE ENTER ALL VALUES IN THE FORM !');
	return false;
	}
	
	}

</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	   console.log('KEYUP');
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 4){$("#user-result").html('');return;}
		
		if(username.length >= 4){
			$("#user-result").html('<img src="imgs/ajax-loader.gif" />');
			$.post('check_username.php', {'username':username}, function(data) {
			$("#user-result").html(data);
			});
		}
	});	
});
</script>


<style type="text/css">
#registration-form 
{
background: #FDFDFD;
width:100px;
padding:x200px;
margin-right: auto;
margin-left:0;
float:left;
border: 0px solid #E9E9E9;
border-radius: 0px;
display:inline-block;
}
.or
{
position:absolute;
left:20px;
top:48px;
}
.form2
{


}
.form1
{


}

</style>

</head><!--/head-->

<?php
if(!empty($_GET["error"]))
{
$error=$_GET["error"];
if($error==404)
echo "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button><center><strong>PLEASE!</strong> LOGIN OR REGISTER TO PROCEED.</center></div>";
else if($error==405) //WRONG PASSWORD
{
echo "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button><strong><center>ERROR!</strong> SOMETHING WRONG WITH PASSWORD OR USERNAME.</center></div>";
echo "wrong password ";
}if($error==406) //NEW USER
echo"<div class='alert alert-success' role='alert'><center>YOU ARE NOW A <strong>REGISTERED USER</strong>. <strong>LOGIN</strong> TO CONTINUE!</center></div>";
else if($error==407)//USER_ID EXISTS
echo"<div class='alert alert-danger' role='alert'><center><h2>ERROR!!!!</h2>USER_ID already exists</center></div>";

}


 ?>
 

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
								<li><a href="#"><i class="fa fa-twitter"></i> </a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i> </a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
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
							echo "<li><a href='profile.php?id=1'><i class='fa fa-user'></i><strong>Hello </strong>".$_SESSION['login_user']."!</a></li>";
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
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
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
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="form"><!--form-->	
		<div class="container">
			<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				
					<div class="signup-form"><!--sign up form-->
						<h2 style="">New User Signup!</h2>
						
						<form class="form1" id="form1" method="post" action="signup.php" onsubmit="return checkforblank2()" >
			                <div style="display:inline-block;">
							<input type="text" placeholder="First Name" name="firstname" id="ffirstname"/>
							</div>
							<div style="display:inline-block;">
							<input type="text" placeholder="Last Name" name="lastname" id="flastname"/>
                            </div>
							<input type="email" placeholder="Email Address" name="email" id="femail" />
							
							<div style="display:inline-block;">
							<input type="text" placeholder="User Id" name="username"  id="username" maxlength="15" style="width:100%">
							</div>
							<span id="user-result" style="">
							</span>
							<input type="password" placeholder="Password" name="password" id="fpassword"/>
							<input type="password" placeholder="Confirm Password" name="cpassword" id="fcpassword"/>							
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
						
					</div><!--/sign up form-->
					
					</div>
				
				
				<div class="col-sm-1">
					<h2 class="or" >OR</h2>
				</div>
				<div class="col-sm-4 ">
				
					<div class="login-form" ><!--login form-->
						<h2>LOGIN</h2>
						<form class="form2" id="form2" name="form2" method="post" action="login-now.php<?php if(!empty($error) && $error==404) echo "?redirect=profile.php?id=1";?>" onsubmit="return checkforblank()" >
						
						   <div style="display:inline-block;" >
							 <input type="text" placeholder="Userid" name="userid" id="userid" "/>
							</div>
                        
						<div style="display:inline-block;">
						<input type="password" placeholder="Password" name="password" id="password" />
						</div>
						<div style="display:inline-block;top:95px;position:absolute;">	
						<button type="submit" class="btn btn-default">Login</button>	
						</div>
						    
							
                             			
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<!--
	<footer id="footer"><!--Footer--><!--
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Easy</span>-Shop</h2>
							<p></p>
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
					<p class="pull-left"></p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">Kritesh and Abhishek</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	<script src="#"></script>

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
	<input name="username" type="text" id="username" maxlength="15">
  <span id="user-result"></span>
</body>
</html>