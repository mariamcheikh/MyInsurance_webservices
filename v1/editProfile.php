<?php
require('connect.php');

$ncin=$_POST['ncin'];
$login=$_POST['login'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$birth_date=$_POST['birth_date'];
$email=$_POST['email'];
$tel=$_POST['tel'];


$sql="UPDATE `subscriber` SET `login` = '$login', `password` = '$password', `fname` = '$fname',  `lname` = '$lname', `birth_date` = '$birth_date', `email` = '$email', `tel` = '$tel'  WHERE `subscriber`.`ncin` = $ncin";

if($conn->query($sql) === TRUE)
{
    echo "infos maj";
}
else
{
    echo "erreur de maj: " . $conn->error;
}

?>
