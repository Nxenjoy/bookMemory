<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container ">


  <form role="form" action = "insert.php" method = "POST">
  <div class="form-group">
    <br>
    <label for="name">ชื่อ :</label>
    <input type="text" class="form-control" id="name" name = "name">
  </div>
  <div class="form-group">
     <label for="authur">ผู้แต่ง:</label>
    <input type="text" class="form-control" id="authur" name = "authur">
  </div>
  <div class="form-group">
     <label for="publisher">สำนักพิมพ์:</label>
    <input type="text" class="form-control" id="publisher" name = "publisher">
  </div> 
  <button type="submit" class="btn btn-default" id="addDB"> เพิ่ม </button>

</form>


</div>



</body>
</html>