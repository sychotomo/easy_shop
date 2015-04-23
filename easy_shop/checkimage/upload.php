<?php
$target_dir = "profiles/";
$file=$_FILES["fileToUpload"];
$type=$file["type"];
$size=$file["size"];
$temp=$file["tmp_name"];
$upload=1;
echo $type;
$var=explode("/",$type);
$type=$var[1];
echo "<br>".$type;
$target=$target_dir."DP.".$type;

if(isset($_POST["submit"])) 
{
if ($size > 500000) 
{
    echo "Sorry, your file is too large.";
    $upload = 0;
}
if($type != "jpg" && $type != "png" && $type != "jpeg" && $type != "gif" ) 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
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
        echo "The file ". $target. " has been uploaded.";
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