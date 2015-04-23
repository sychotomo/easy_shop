<!DOCTYPE html>
<?php
ob_start();
session_start();
//echo $_SESSION['login_user'];
//include "htdocs/cart.html";
 require_once 'login.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EASY-SHOP|Account</title>
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


   <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">-->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript">
		function checkforblank()
	{
		if(document.getElementById('fpassword').value.localeCompare(document.getElementById('fcpassword').value)!=0)
	{
	console.log('PASSWORD not matching!');
	alert('PASSWORD doesnt match!');
	return false;
	}
		if(document.getElementById('fpassword').value == "" )
			console.log('HELL');
	if( document.getElementById('ffirstname').value == "" || document.getElementById('flastname').value == "" || document.getElementById('femail').value == "" || document.getElementById('username').value == "" || document.getElementById('fpassword').value == "" )
	{
	console.log('pagal h kya?');
	alert('PLEASE ENTER ALL VALUES IN THE FORM !');
	return false;
	}
	
	}

</script>
  
  
</head><!--/head-->
<style>
#md1	
{
	width:300px;
}
.modal-backdrop {
   
}
#md2
{
	width:350px;
}



</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#bt").click(function(){
    $("#header").css("-webkit-filter","blur(2px) grayscale(1) opacity(0.5)");
  });
  $("#header").mouseover(function(){
    $("#header").css("-webkit-filter","blur(0px) grayscale(0) opacity(1)");
  });

   $("#bt2").click(function(){
    $("#header").css("-webkit-filter","blur(0px) grayscale(0) opacity(1)");
  });
  

$("#bt3").click(function(){
    $("#header").css("-webkit-filter","blur(2px) grayscale(1) opacity(0.5)");
  });
 $("#bt4").click(function(){
    $("#header").css("-webkit-filter","blur(0px) grayscale(0) opacity(1)");
  });

});
</script>
<?php
if(!empty($_GET["removed"]))
{
$removed=$_GET["removed"];
if($removed==1)
echo "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button><center><strong>DONE!</strong>Product Removed from Wishlist.</center></div>";
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
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php?action=show"><i class="fa fa-shopping-cart"></i> Cart</a></li>

								<li><a href="<?php if(empty($_SESSION['login_user'])){echo "log-in.php";} else{echo "logout.php";}?>"><i class="fa fa-lock"></i><?php if(empty($_SESSION['login_user'])){echo "Login";} else{echo "Logout";}?></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<!--<div class="header-bottom"><!--header-bottom--><!--
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
										<li><a href="login.html">Login</a></li> 
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
						
						
						
						<div class="shipping text-center"><!--shipping-->
							<!--<img src="images/home/shipping.jpg" alt="" />-->
						</div><!--/shipping-->
					
					</div>
				</div>

<?php
if(!empty($_GET["id"]))
{
	$i=$_GET["id"];
}
?>
<?php
$sql="select count(*) from items where id in (select ProductId from wishlist where UserId='".$_SESSION['login_user']."')"; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql) or die(mysql_error());
	  
	  $rows=mysql_num_rows($result);
	   for($j=0;$j<$rows;$j++){
	   	  $row=mysql_fetch_row($result);
	   	 $count=$row[0];
	   	//  echo $count;
	   }
	   $sql1="select count(*) from items where id in (select p_id from delivery_details where id='".$_SESSION['login_user']."')"; 
	   $result1=mysql_query($sql1) or die(mysql_error());
	  
	  $rows1=mysql_num_rows($result1);
	   for($j=0;$j<$rows1;$j++){
	   	  $row1=mysql_fetch_row($result1);
	   	 $count1=$row1[0];
	   	//  echo " ".$count1;
	   }
	?>
 	<div class="col-sm-7">
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="<?php if($i==1) echo "active"; ?>"><a href="profile.php?id=1">Profile</a></li>
  <li role="presentation" class="<?php if($i==2) echo "active"; ?>"><a href="profile.php?id=2">My Orders<span class="badge"><?php echo $count1; ?></span></a></li>
   <li role="presentation" class="<?php if($i==3) echo "active"; ?>"><a href="profile.php?id=3">Wish-List<span class="badge"><?php echo $count;?></span></a></li>
  <li role="presentation" class="dropdown">
    
  </li>
</ul>


<!-- PROFILE -->
<!--<div class="well profile" style="width:550px;">-->

<?php if($i==1) 
{
	$sql="select * from users where UserId='".$_SESSION['login_user']."'"; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql) or die(mysql_error());
	  
	  $rows=mysql_num_rows($result);
	   for($j=0;$j<$rows;$j++)
	   {
	  $row=mysql_fetch_row($result);
	  $name=$row[0]." ".$row[1];
	  $email=$row[2];
	  $id=$row[3];
	  $img=$row[5];


if(empty($img)) $img='default.jpg';
//echo "fuck<br>";


?> <img src="Profiles/<?php echo $img;?>" class="img-circle" alt="" height="120" width="120" style="">

 
 


<div class="btn-group">
	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#changepicture" id="bt"><i class="glyphicon glyphicon-camera"></i>
</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#changeinformation" id="bt3"><i class="glyphicon glyphicon-pencil"></i>
</button>
  
</div>

	


	            <p style="">
                    <p><strong>NAME:</strong><?php echo $name; ?>  </p>
                    <p><strong>User-Id:</strong><?php echo $id; ?>  </p>
                    <p><strong>Email-Id:</strong> <?php echo $email; ?></p>
                </p>
         
 
</div>
 </div>      
 <?php 
 }
 } 
 ?>
                
<!--PROFILE END   -->
<?php 
if($i==2) 
{
$sql="select * from items where id in (select p_id from delivery_details where id='".$_SESSION['login_user']."')"; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql) or die(mysql_error());
	  
	  $rows=mysql_num_rows($result);
	   for($j=0;$j<$rows;$j++)
	   {
	  $row=mysql_fetch_row($result); 
	          $brand=$row[2]; 
	          $image=$row[4];
			  $price=$row[5];
			  $type=$row[3];
			  $product=$row[0];
			  $id=$row[1];
			  //echo $id." ";
			  //echo $type." ";
			  //echo $image." ";
?>
<div class="col-sm-12">
<div class="col-sm-5">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="data/<?php echo $image?>" alt="" height="300px" width="100px" class="img-thumbnail" style=""/>
												<!--<h2>Rs.</h2>-->
											<!--<p></p>-->
											<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<h2 style="color:orange"></h2>
												<p style="color:orange"></p>
												<!--<a href="" class="btn btn-default add-to-cart" style=""><i class="fa fa-shopping-cart"></i></a><br>-->
												
												
										</div>
										<!--<div class="product-overlay">
											<div class="overlay-content">
												<h2 style="color:orange"><?php echo $brand." ".$product;?>	</h2>
												<p style="color:orange">Rs.<?php echo $price?></p>
												<a href="<?php echo "cart.php?action=add&id=$id";?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a><br>
											
											</div>
										</div>-->
								</div>
							</div>	
						</div>
							<div class="col-sm-7">
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>-->
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>-->
										<h2 style="color:black"><?php echo $brand." ".$product;?></h2>
										<h2 style="color:orange">Rs.<?php echo $price?></h2>
									
										<div class="btn-group">
										<!--<a class="btn btn-default" type="button" href="removewishlist.php?id=<?php echo $id;?>&location=profile.php?id=3"><p style="color:orange"><span class="glyphicon glyphicon-remove"></span>REMOVE FROM WISHLIST</p></a>-->
							<a class="btn btn-default"  type="button" href="<?php echo "cart.php?action=add&id=".$id;?>" <?php if(empty($_SESSION['login_user'])) echo "disabled"; ?> </span><p style="color:orange"> <span class="glyphicon glyphicon-shopping-cart"></span>ADD TO CART</p></a>
										</div>
										</ul>
									</div>
							</div>
</div>
<?php 
}
} ?>

<!--WISH LIST -->
<?php 
if($i==3) 
{
$sql="select * from items where id in (select ProductId from wishlist where UserId='".$_SESSION['login_user']."')"; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql) or die(mysql_error());
	  
	  $rows=mysql_num_rows($result);
	   for($j=0;$j<$rows;$j++){
	  $row=mysql_fetch_row($result); 
	          $brand=$row[2]; 
	          $image=$row[4];
			  $price=$row[5];
			  $type=$row[3];
			  $product=$row[0];
			  $id=$row[1];
?>	
<div class="col-sm-12">
<div class="col-sm-5">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="data/<?php echo $image?>" alt="" height="300px" width="100px" class="img-thumbnail" style=""/>
												<!--<h2>Rs.</h2>-->
											<!--<p></p>-->
											<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<h2 style="color:orange"></h2>
												<p style="color:orange"></p>
												<!--<a href="" class="btn btn-default add-to-cart" style=""><i class="fa fa-shopping-cart"></i></a><br>-->
												
												
										</div>
										<!--<div class="product-overlay">
											<div class="overlay-content">
												<h2 style="color:orange"><?php echo $brand." ".$product;?>	</h2>
												<p style="color:orange">Rs.<?php echo $price?></p>
												<a href="<?php echo "cart.php?action=add&id=$id";?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a><br>
											
											</div>
										</div>-->
								</div>
							</div>	
						</div>
							<div class="col-sm-7">
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>-->
										<!--<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>-->
										<h2 style="color:black"><?php echo $brand." ".$product;?></h2>
										<h2 style="color:orange">Rs.<?php echo $price?></h2>
									
										<div class="btn-group">
										<a class="btn btn-default" type="button" href="removewishlist.php?id=<?php echo $id;?>&location=profile.php?id=3"><p style="color:orange"><span class="glyphicon glyphicon-remove"></span>REMOVE FROM WISHLIST</p></a>
							<a class="btn btn-default"  type="button" href="<?php echo "cart.php?action=add&id=".$id;?>" <?php if(empty($_SESSION['login_user'])) echo "disabled"; ?> </span><p style="color:orange"> <span class="glyphicon glyphicon-shopping-cart"></span>ADD TO CART</p></a>
										</div>
										</ul>
									</div>
							</div>
</div>

<?php 
}
} ?>
<!-- WISH LIST ENDS HERE-->
</header>
<!-- MODAL 1 -->
<div class="modal fade" id="changepicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog " id="md1" >
		<!--<div class="modal-content">
			</div>-->

	<div class="modal-header">
        <h4 class="modal-title" style="color:orange">UPLOAD PICTURE</h4>
      </div>
      

      <!--<div class="modal-body">-->
    <form role="form" action="upload.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label>Select image to upload:</label>

    <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-default">
    </div>
     <!-- </div>-->


      <div class="modal-footer">
      	<input type="submit" value="Upload Image" name="submit" class="btn btn-warning" >
         </form>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="bt2">Close</button>
        
      </div>
</div>
</div>
<?php
$sql = "SELECT * FROM users WHERE UserId='".$_SESSION['login_user']."';";
		
		$result=mysql_query($sql) or die(mysql_error());
	  
	  $rows=mysql_num_rows($result);
	   for($j=0;$j<$rows;$j++){
	  $row=mysql_fetch_row($result); 
	          $first=$row[0]; 
	          $last=$row[1];
			  $email=$row[2];
			  $password=$row[4];
			 // echo $first."<br>";
			}
?>

<div class="modal fade" id="changeinformation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog " id="md2" >
		<!--<div class="modal-content">
			</div>-->

	<div class="modal-header">
        <h4 class="modal-title" style="color:orange">EDIT PROFILE</h4>
      </div>
      
       <br>
      <!--<div class="modal-body">-->
   <form class="form-horizontal" role="form" action="changedetails.php" method="post" onsubmit="return checkforblank()" >
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">NAME:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control"  placeholder="First Name" id="ffirstname" name="firstname" value="<?php echo $first;?>" name="firstname">
    </div>
     <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Last Name" id="flastname" value="<?php echo $last;?>" name="lastname">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">E-mail:</label>
    <div class="col-sm-8"> 
      <input type="email" class="form-control"  placeholder="E-mail Adress" id="femail" value="<?php echo $email?>" name="email">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" placeholder="Password" id="fpassword" value="<?php echo $password?>" name="password">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" placeholder="Confirm Password" id="fcpassword" value="<?php echo $password?>">
    </div>
  </div>
  
     <!-- </div>-->


      <div class="modal-footer">
      	<div class="form-group"> 
    
      	<button type="submit" class="btn btn-warning" >Submit</button>
      	</form>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="bt4">Close</button>
        
      </div>
</div>
</div>

<!-- MODAL 2 -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>