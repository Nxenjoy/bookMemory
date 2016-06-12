<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Book Memory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
    tr {
      width: 100%;
      display: inline-table;
    }
    table{
     height:400px; 
   }
   tbody{
    overflow-y: scroll;
    height: 90%;
    width: 90%;
    position: absolute;
  }</style>
</head>
<body>
	<br>
     <div class="col-md-3">
       <table class="table table-striped">

        <tbody> 
         
         <?php 
         $servername = "128.199.86.22";
         $username = "root";
         $password = "meepooh";
         $dbname = "bookMemory";
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
            echo "<td> ชื่อ: " . $row["bookName"]. "<br>ผู้แต่ง: " . $row["bookAuthur"]. "<br>สำนักพิมพ์: " . $row["bookPublisher"]."</td>";
            echo "</tr>";
          }
          
        }
        $conn->close();
        ?>
      </div>

  </tbody>
</table>
</div>
</div>

</div>


<form action="add.php">
  <center> <input type="submit" class="btn btn-info" value="เพิ่มข้อมูล" id="addbtn"></center>
  <form>


  </body>
  </html>