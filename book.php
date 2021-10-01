<?php
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "youtube";
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $check_in = $_POST['in'];
   $check_out = $_POST['out'];
   $rm = $_POST['room'];
   $room_type = $_POST['type'];
	// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
	  $sql = "INSERT INTO register (
      
    ) VALUES ('$fname', '$email' , '$mobile' , '$check_in' , '$check_out' , '$rm' , '$room_type' )";
	if ($conn->query($sql) === TRUE) {
		echo "Check your mail to see if your booking is confirmed!";
	  } else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	  }
	  
	  $conn->close();
	
?>