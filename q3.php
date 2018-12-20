<!DOCTYPE html>
<html>
<head>
  <title>Details</title>
  <script>
    function validate_form(form)
    {
      if(form.name.value=="")
      {
        alert("Username cannot be empty");
        form.name.focus();
        return false;
      }
      if(form.number.value="")
      {
        alert("Phone number cannot be empty");
        form.name.focus();
        return false;
      }
      if(form.number.value.length()<9)
      {
        alert("Phone number must have atleast 9 numbers");
        form.name.focus();
        return false;
      }
    }
  </script>
</head>
<body>
  <center>
  <form action="" method="POST" onSubmit="validate_form(this);">
    Username:<input type="text" placeholder="Name" name="name"><br>
    Mobile Number:<input type="text" placeholder="Number" name="number"><br>
    <input type="submit" value="Submit">
  </form>
  <input type="button" name="button" onclick="location.href='view.php'" value="LIST">
</center>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="exam";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['name'])){
$user=$_POST['name'];
$num=$_POST['number'];
$sql="INSERT into `user`(`username`,`number`) values('$user','$num')";
$result=mysqli_query($conn,$sql);
}
?>