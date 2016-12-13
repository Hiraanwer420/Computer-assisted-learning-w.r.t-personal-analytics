<?php
 session_start();
 $username=$_POST['username'];
 $password=$_POST['password'];
 

 
if($username&&$password)
{
 $mysqli=mysqli_connect("localhost","root","","fyp");
 if ($mysqli->connect_error) {          
    die("Connection failed: " . $mysqli->connect_error);
} 

	 echo "Connected successfully"; 
 //or die("Couldn't connect to database");
 
 
 
  $query=mysqli_query($mysqli,"select * from dummy where username='$username'");
  $numrows=mysqli_num_rows($query);
  if($numrows!=0)
  {
	  while($row= mysqli_fetch_assoc($query))
	  {
	  $dbusername=$row['username'];
	  $dbpassword=$row['password'];
	  
	  }
	  if($username==$dbusername && md5($password)==md5($dbpassword))
		{
		$link = "<script>window.location='UserProfile.php'</script>";
		echo $link;
		$_SESSION["username"]=$username;
		
		 }
		else
		{
		echo "Your password is incorrect!";
		}
		}
		else
		die("User doesnot exits");
		}
		else
		die("Please enter username and password");
?>