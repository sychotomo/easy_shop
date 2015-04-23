<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">  
<title>Live Username Check</title>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>

<style type="text/css">
#registration-form {background: #FDFDFD;width: 350px;padding: 20px;margin-right: auto;margin-left: auto;border: 1px solid #E9E9E9;border-radius: 10px;}
</style>
</head>
<body>

						<h2>New User Signup!</h2>
						
						<input name="username" type="text" id="username" maxlength="15">
                              <span id="user-result"></span>
						<form id="form2" method="post" action="signup.php" >
						 <input name="username" type="text" id="username" maxlength="15">
                              <span id="user-result"></span>
						
							<input type="text" placeholder="First Name" name="firstname" id="ffirstname"/><br>
							<input type="text" placeholder="Last Name" name="lastname" id="flastname"/><br>
							<input type="email" placeholder="Email Address" name="email" id="femail" /><br>
							<input name="username" type="text" id="username" maxlength="15">
                              <span id="user-result"></span>
							<input type="text" placeholder="User Id" name="fuserid" id="fuserid" maxlength="15"/><br>
							<input type="password" placeholder="Password" name="password" id="fpassword"/><br>
							<input type="password" placeholder="Confirm Password" name="cpassword" id="fcpassword"/><br>
							 <input name="username" type="text" id="username" maxlength="15" placeholder="userid"><br>
                              
							
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
						      
							  <script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	console.log('CHAL RHA!');
	
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
				



</body>
</html>
