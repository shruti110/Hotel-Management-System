<?php
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "youtube";
   $feed = $_POST['feed'];
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
   if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	 }
	 $sql = "INSERT INTO feedback (
	 
   ) VALUES ('$feed' )";
   if ($conn->query($sql) === TRUE) {
	   echo "Feedback Submitted!Thankyou for your time";
	 } else {
	   echo "Error: " . $sql . "<br>" . $conn->error;
	 }
	 
	 $conn->close();
   
?>