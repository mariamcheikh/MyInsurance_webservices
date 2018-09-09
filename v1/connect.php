<?php
/**
 * Created by PhpStorm.
 * User: Mariam
 * Date: 05/12/2017
 * Time: 01:16
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assurance";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>