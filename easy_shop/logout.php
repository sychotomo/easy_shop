<?php 
session_start();
session_destroy();
echo "LOGGED OUT!!";
header("location:home.php");	

?>