<html>
<?php
//ob_start();
session_start();
require_once 'login.php';
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$userid=$_POST["username"];
$password=$_POST["password"];
		//$sql = "SELECT * FROM users WHERE UserId='".$username."' and Password='".$password."';";
		$sql="INSERT INTO USERS  (FirstName,LastName,Email,UserId,Password) VALUES ('".$firstname."','".$lastname."','".$email."','".$userid."','".$password."');";
		
		if(mysql_query($sql))
		{
		echo "SUCESSFUL!";
		header("location:log-in.php?error=406");
		}
		 else
		 {
		 	echo "UNSUCESSFUL!";
         header("location:log-in.php?error=407"); 
		 }
?>

</html>