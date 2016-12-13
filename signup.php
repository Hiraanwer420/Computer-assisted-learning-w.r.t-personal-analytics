<?php

session_start();
$conn = new mysqli("localhost", "root","","fyp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	// echo "Connected successfully"; 
	
		$email = $_POST["email"];
		$password = $_POST["password"];
		$user = $_POST['username'];

		
		$sql = "INSERT INTO dummy VALUES (null, '$user', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
	$link = "<script>window.location='UserProfile.php'</script>";
	echo $link;
	$_SESSION["username"]=$user;
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	
?>


