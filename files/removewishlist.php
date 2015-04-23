
<html>
<?php 
ob_start();
session_start();
require_once 'login.php';
$product_id=$_GET['id'];
$redirect=$_GET["location"];
echo $redirect;
echo $product_id;
echo "<br>";
if(empty($_SESSION['login_user']))
{
echo "LOGIN FIRST";
							
}							
else
{
$id=$_SESSION['login_user'];
echo "LOGGED IN!";
$sql="DELETE FROM wishlist WHERE UserId='".$id."' and ProductId=".$product_id." ";
echo "<br>".$sql;
if(mysql_query($sql))
		{
		echo "SUCESSFUL!";
		header("location:".$redirect."&removed=1");
		}
		 else
		 {
		 	echo "<br>ERROR";
        //header("location:log-in.php?error=407"); 
		 }

}
?>
</html>