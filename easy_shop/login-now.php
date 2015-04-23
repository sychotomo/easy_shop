<html>
<?php
ob_start();
session_start();
require_once 'login.php';
$username=$_POST["userid"];
$password=$_POST["password"];
$redirect=$_GET["redirect"];
require_once 'login.php';
		$sql = "SELECT * FROM users WHERE UserId='".$username."' and Password='".$password."';";
		
		$result = mysql_query($sql);
		
		$rows=mysql_num_rows($result);

		if($rows==1)
		{
		 $_SESSION['login_user']=$username;	
		 if(!empty($_GET['redirect']))
		 header("location:".$redirect);
		 else
         header("location:home.php");		 
		 }
		else
		{
		
		header("location:log-in.php?error=405");
		}?>

</html>