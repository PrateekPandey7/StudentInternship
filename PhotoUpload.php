<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["PhotoToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$final_file = $target_dir . $name .'('. $dob. ')(Photo).'. $imageFileType;
$check = getimagesize($_FILES["PhotoToUpload"]["tmp_name"]);
$flag = 0;
if($check !== false) 
{
    $uploadOk = 1;
} 
else 
{
    $uploadOk = 0;
}
/*if (file_exists($final_file) && $flag == 0) 
{
    echo "<script type='text/javascript'>alert('Sorry, This Name Application already exists.');</script>";
    //$error .= "Image Exist";
    $uploadOk = 0;
    $flag = 1;
}*/
if (($_FILES["PhotoToUpload"]["size"] > 500000) && $flag == 0) 
{
    echo "Sorry, Image file is too large.";
    //$error .= "Image too Large";
    $uploadOk = 0;
    $flag = 1;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" && $flag == 0) 
{
    echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    //$error .= "Image not of correct format";
    $uploadOk = 0;
    $flag = 1;
}

if ($uploadOk == 0  && $flag == 0) 
{
    echo "<script type='text/javascript'>alert('Sorry, your file was not uploaded.');</script>";

} 
else 
{
    if (move_uploaded_file($_FILES["PhotoToUpload"]["tmp_name"], $final_file)) 
    {
      
    } 
    else 
    {
        echo "<script type='text/javascript'>alert('Sorry, there was error in uploading');</script>";
        //$error .= "Some Error";
    }
}
?>