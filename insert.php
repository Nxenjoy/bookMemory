<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";


$bookName = $_POST['name'];
$bookAuthur = $_POST['authur'];
$bookPublisher = $_POST['publisher'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

 
	$cs1 = "SET NAMES 'utf8' COLLATE 'utf8_general_ci'";
	$conn->query($cs1);

	
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO books (bookName, bookAuthur, bookPublisher)
VALUES ('".$bookName."','".$bookAuthur."','".$bookPublisher."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>