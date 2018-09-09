<?php
require('../v1/connect.php');

$user_id=$_GET['user_id'];

$sql = "SELECT date,lieu,nomConducteur,prenomConducteur,marquevoiture,immatriculation,nomConducteurA,prenomConducteurA,marquevoitureA,immatriculationA FROM constat where user_id=$user_id";
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