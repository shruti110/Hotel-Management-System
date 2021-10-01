<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
     .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>fname</th>
<th>email</th>
<th>mobile</th>
<th>check_in</th>
<th>check_out</th>
<th>rm</th>
<th>room_type</th>

</tr>

<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "youtube";
// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fname,email,mobile,check_in,check_out,rm,room_type FROM register";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["mobile"]."</td><td>" . $row["check_in"]."</td><td>". $row["check_out"]."</td><td>". $row["rm"]."</td><td>". $row["room_type"] ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<form action="feedback1.php" method="post">
        <input type="submit" name="button1"
                value="View Feedbacks"/>
    </form>
</table>
</body>
</html>