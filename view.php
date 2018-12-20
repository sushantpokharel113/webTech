<!DOCTYPE html>
<html>
<head>
  <title>Details</title>
  </head>
<body>
  <?php $servername = "localhost";
  $username = "root";
  $password = "";
  $db="exam";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$db);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql="select * from `user`";
  $result=mysqli_query($conn,$sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["number"]. "<br>";
    }
  }
 ?>