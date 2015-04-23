
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
$sql="INSERT INTO wishlist VALUES ('".$id."',".$product_id.",1);";
echo $sql;
if(mysql_query($sql))
		{
		echo "SUCESSFUL!";
		header("location:".$redirect."".".php?added=1");
		}
		 else
		 {
        //header("location:log-in.php?error=407"); 
		 }


}







?>
</html>