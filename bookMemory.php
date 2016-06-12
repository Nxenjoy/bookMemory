<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Memory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
<form action="">
	<div class="container">
     <div class="col-xs-8">
     	<input type="text" class="form-control " id="usr">
     </div>
     <div class="col-xs-2">
     	<input type="submit" class="btn btn-info btn-sm" value="ค้นหา">
     </div>

  <div class ="scroll">
  <div class="container">
  <table class="table table-hover">

    <tbody> 
   
 <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$cs1 = "SET NAMES 'utf8' COLLATE 'utf8_general_ci'";
  $conn->query($cs1);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
        echo "<td>Name: " . $row["bookName"]. "<br>Authur: " . $row["bookAuthur"]. "<br>Publisher: " . $row["bookPublisher"]."</td>";
     echo "</tr>";
    }
   
} else {
    echo "0 results";
}
$conn->close();
 ?>
</div>

</form>
    
    </tbody>
  </table>

</div>
	
</div>


<form action="add.php">
<center> <input type="submit" class="btn btn-info" value="เพิ่มข้อมูล"></center>
<form>


</body>
</html>
