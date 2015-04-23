<html>
<?php
$id=$_GET["id"];
echo $id;
if(empty($_GET["work"]))
header("location:removewishlist.php?id=$id&location=intermediate.php?id=$id&work=3");
else if($_GET["work"]==3)
	echo "<br>".$id;
//header("location:cart.php?action=add&id=".$id);
?>
</html>