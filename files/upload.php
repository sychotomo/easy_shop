<?php
require_once 'login.php';
ob_start();
session_start();
//echo $_SESSION['login_user'];
$name=$_SESSION['login_user'];
$target_dir = "Profiles/";
$file=$_FILES["fileToUpload"];
$type=$file["type"];
$size=$file["size"];
$temp=$file["tmp_name"];
$upload=1;
echo "t:".$type;
$var=explode("/",$type);
$type=$var[1];
echo "<br>".$type;
$target=$target_dir."$name.".$type;
$img="$name.".$type;;
echo "IMAGE_>".$img;

if(isset($_POST["submit"])) 
{
if ($size > 5000000) 
{
    echo "Sorry, your file is too large.";
    $upload = 0;
}
if($type != "jpg" && $type != "png" && $type != "jpeg" && $type != "gif" ) 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.TYPE:".$type;
    $upload = 0;
}
if ($upload == 0) 
{
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
 else 
 {
    if (move_uploaded_file($temp, $target)) 

    {
        echo "<br>The file ". $img. " has been uploaded.";
       $sql="UPDATE users SET Image='$img' WHERE UserId='$name'"; 
        //echo $sql;
      //-run  the query against the mysql query function 
     mysql_query($sql) or die(mysql_error());
      header("location:profile.php?id=1");
    } else 
    {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

/*$target_file = $target_dir ."DP".$_FILES["fileToUpload"]["tmp_name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }
     else 
    {
        echo "Sorry, there was an error uploading your file.";
    }*/
?>