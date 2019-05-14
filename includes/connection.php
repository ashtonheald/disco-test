<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "Agh1013132_";
$dbName = "the_killers_discography";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
