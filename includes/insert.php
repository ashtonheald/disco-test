<?php
$servername = "localhost";
$username = "root";
$password = "Agh1013132_";
$dbname = "the_killers_discography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "INSERT INTO email_list (email) VALUES ('$email')";

if($conn->query($sql) === TRUE){
	echo "Record Added Sucessfully";
} else {
	echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();


?>
