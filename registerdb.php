<html>
<head><style>
body
{
 height: 1200px;
   background-image:url("red.jpg");
   background-repeat:no repeat;
   background-size:cover;
}
h1
{
color:white;
}
</style></head>
<body>
</body>
</html>
<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
echo "error";   
}
$name=$_POST['txt'];
$contact=$_POST['no'];
$blood=$_POST['bod'];
$addr=$_POST['add'];
$sql = "INSERT INTO regtable(fullname,contactno,blood,addr)VALUES ('$name','$contact','$blood','$addr')";
if(mysqli_query($conn, $sql))
  echo "<h1>your  data is recorded!<h1>";
mysqli_close($conn);

?>
