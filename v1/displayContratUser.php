<?php
require('../v1/connect.php');

$ncin_owner=$_GET['ncin_owner'];

$sql = "SELECT 	serial_num,marque,modele,energie,cv_fiscaux,immat,date_circul FROM voiture where ncin_owner=$ncin_owner";
$table=array();
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        $table[]=$row;
    }
    print json_encode($table);

}
else
{
    echo "Pas de valeurs<br /><br />";
}

?>