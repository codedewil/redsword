<html>
<head><style>
body
{
 margin:30px;
 border:1px solid white;
 height: 1200px;
   background-image:url("red.jpg");
   background-repeat:no repeat;
   background-size:cover;
}
h1
{
color:white;
text-align:center;
 padding-top:20px;
}
h3
{
color:white;

}
table
{
 background: linear-gradient(0deg,rgba(10, 10, 10, 0.3),rgba(10, 10, 10, 0.3));
  margin-left:300px;
   margin-top:100px;
   color:white;
  size:100px;
   
}
tr
{
color:white;
font-size:30px;
}
th
{
font-family:arial;
font-size:25px;
}
</style></head>
<body>
<h1>your required result is</h1>
</body>
</html>
<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
echo "error";   
}
$blood=$_POST['txt'];
$sql = "(SELECT hos_name,blood,location,contact,count(hosid) AS 'available' FROM `hostable` WHERE blood='$blood' GROUP BY hosid)";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
 echo "<table border='1'><tr><th>NAME</th><th>BLOOD</th><th>CONTACT</th><th>LOCATION</th><th>AVAILABLE</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $row["hos_name"]. "</td><td>" . $row["blood"]. "</td><td>". $row["contact"]. "</td><td>" . $row["location"]."</td><td>" . $row["available"]. "</td></tr>";
   }
echo "</table>";
} else {
    echo "<h1>0 results</h1>";
}


mysqli_close($conn);

?>
