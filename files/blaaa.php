<html>
<body>
<?php 
require_once 'login.php';
?>
<table border="1">
<?php
		$sql = "SELECT * FROM products;";
		
		$result = mysql_query($sql);
		
		$rows=mysql_num_rows($result);
		for($j=0;$j<$rows;$j++)
		{
	    $row=mysql_fetch_row($result);
		echo"product name:".$row[4];
		echo "<br/>";
		 header("Location: 404.html");    
		}
	echo "</tr>";
		
?>
</table>

</body>
</html>