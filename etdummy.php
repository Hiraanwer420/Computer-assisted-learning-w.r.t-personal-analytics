<?php

session_start();

$conn = new mysqli("localhost", "root","","fyp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	 echo "Connected successfully"; 
	
		$time = $_GET["ts"];
		
		echo $time."</br>";
		$username = $_SESSION["username"];
		$sql = "SELECT * FROM etdummy where username='$username'";
		$result = $conn->query($sql);
		echo $result->num_rows;
		
		
		if($result->num_rows>0)
		{
			while($row= mysqli_fetch_assoc($result))
			{
				$dbtime=$row['lecture1'];
				$finaltime = $time+$dbtime;
				
	  
			}
		$sql = "UPDATE etdummy SET lecture1='$finaltime' where username='$username'";
		}
			
		else 
		{
			$sql = "INSERT INTO etdummy VALUES ('$username', '$time')";
		}
		
		
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("location:javascript://history.go(-1)");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	
?>