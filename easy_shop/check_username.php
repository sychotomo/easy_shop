<?php
if(isset($_POST["username"]))
{
   require_once 'login.php';
   
  //received username value from registration page
  $userid =  $_POST["username"]; 
  //$userid="i_dhapola";

  //check username in db
  $results = mysql_query("SELECT UserId FROM users WHERE UserId='$userid'");
  
  $username_exist = mysql_num_rows($results); //records count
  
  //if returned value is more than 0, username is not available
  if($username_exist) {
  //echo "exists!";
  $correct=0;
     die('<?php echo $correct;?><img src="imgs/not-available.png" />');
	   //die('EXISTS');
  }else{
  //echo "not-exists!";
  $correct=1;
      die('<?php echo $correct;?><img src="imgs/available.png" />');
	   //die('NOTEXISTS');
  }
}
?>