
<?php
require('connect.php');

$immat= $_POST["immat"];

$sql="DELETE FROM voiture  WHERE immat = '$immat'";

if($conn->query($sql) === TRUE)
{
    echo "voiture supprimée";
}
else
{
    echo "erreur de creation: " . $conn->error;
}

?>

