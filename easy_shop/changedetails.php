<html>
<?php
//ob_start();
session_start();
require_once 'login.php';
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
echo $firstname."<br>";
echo $password."<br>";
		//$sql = "SELECT * FROM users WHERE UserId='".$username."' and Password='".$password."';";
        $id=$_SESSION['login_user'];
        
		$sql="UPDATE USERS SET FirstName='".$firstname."' ,LastName='".$lastname."' ,Email='".$email."' ,Password='".$password."'  WHERE UserId='".$id."' ;";
		echo $sql."<br>";

		if(mysql_query($sql))
		{
		echo "SUCESSFUL!";
		header("Location:profile.php?id=1");
		}
		 else
		 {
		 	echo "UNSUCESSFUL!";
         //header("location:log-in.php?error=407"); 
		 }
?>

</html>