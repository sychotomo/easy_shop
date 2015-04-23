<?php
ob_start();
session_start();
echo $_SESSION['login_user'];
if(isset($_SESSION['login_user']))
echo "SET IT IS";
else
echo "NOOO";
?>