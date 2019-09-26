<html>
<head><style>
body
{
 height: 1200px;
   background-image:url("red.jpg");
   background-repeat:no repeat;
   background-size:cover;
}
h2
{
color:white;
}
h3
{
color:white;
}
table
{
 background: linear-gradient(0deg,rgba(10, 10, 10, 0.3),rgba(10, 10, 10, 0.3));
  margin-left:50px;
   margin-top:70px;
   color:white;
  size:100px;
   
}
tr
{
color:white;
font-size:30px
}
th
{
font-family:arial;
}
</style></head>
<body>
<center><h2>YOUR REQUIRED RESULT IS</h2><center>
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
$group=$_POST['blood'];
$loca=$_POST['loc'];
$sql = "SELECT * FROM `regtable` WHERE blood='$group' AND addr='$loca'";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
 echo "<table border='1'><tr><th>NAME</th><th>CONTACT</th><th>LOCATION</th><th>BLOOD</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $row["fullname"]. "</td><td>" . $row["contactno"]. "</td><td>" . $row["addr"]."</td><td>" . $row["blood"]. "</td></tr>";
    }
echo "</table>";
} else {
    echo "<h1>0 results</h1>";
}

mysqli_close($conn);

?>
