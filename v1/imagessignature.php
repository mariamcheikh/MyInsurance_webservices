<?php
include("connect.php");
#Accepting the data (parameters) passed from the application


$image = $_FILES['img']['tmp_name'];
$constat_id =$_POST['constat_id'];

print_r($image);

$response=array();
$response["success"]=false;
$data = file_get_contents($image);

var_dump($data);

$result=mysqli_query($conn,"INSERT INTO `imagesigniature` (  `image`,`constat_id`) VALUES ( 'image',$constat_id)");

$fetchId=mysqli_query($conn,"SELECT `id` FROM `imagesigniature`");
$id=1;
while($rowid=mysqli_fetch_array($fetchId,MYSQLI_ASSOC)){
    $id=$rowid['id'];

}
$filePath = "imagesSignature/image$id.png";#name of the file and the location where the image is to be updated
#full URL of the file (used to download the image during login)
$url = "image$id.png";
$update=mysqli_query($conn,"UPDATE `imagesigniature` SET `image`='$url' WHERE id='$id'");#updating the profile-pic url
if($update){

    file_put_contents($filePath,$data);#storing the file after decoding from string format.
    #All operations gave been completed.
}
$response["success"]=true;
$response["message"]="Image Capturee Succeeded succeeded";




echo json_encode($response);#encoding RESPONSE into a JSON and returning.
mysqli_close($conn);#closing the connection
exit();
?>