<?php 
session_start();     

 $mysqli=mysqli_connect("localhost","root","","fyp");
 if ($mysqli->connect_error) {
   die("Connection failed: " . $mysqli->connect_error);
} 

	 //echo "Connected successfully"; 
 //or die("Couldn't connect to database");
 
	 $queryuser1=mysqli_query($mysqli,"SELECT * FROM `etdummy` where lecture1 != 0");
	 $numusers1=mysqli_num_rows($queryuser1); 
	 $query1=mysqli_query($mysqli,"SELECT SUM(lecture1) AS ET1 FROM etdummy");
	  while($row= mysqli_fetch_assoc($query1))
	  {
	  $et1=$row['ET1'];
	  }
	   $precision = 2;
	  $meanet1 = $et1/$numusers1;
	  $meanet1 = number_format((float) $meanet1, $precision, '.', '');
	  
	  $queryuser2=mysqli_query($mysqli,"SELECT * FROM `etdummy` where lecture2 != 0");
	  $numusers2=mysqli_num_rows($queryuser2); 
	  $query2=mysqli_query($mysqli,"SELECT SUM(lecture2) AS ET2 FROM etdummy");
	  while($row= mysqli_fetch_assoc($query2))
	  {
	  $et2=$row['ET2'];
	  }
	  $meanet2 = $et2/$numusers2;
	  $meanet2 = number_format((float) $meanet2, $precision, '.', '');
	  
	  $queryuser3=mysqli_query($mysqli,"SELECT * FROM `etdummy` where lecture3 != 0");
	  $numusers3=mysqli_num_rows($queryuser3); 
	  $query3=mysqli_query($mysqli,"SELECT SUM(lecture3) AS ET3 FROM etdummy");
	  while($row= mysqli_fetch_assoc($query3))
	  {
	  $et3=$row['ET3'];
	  }
	  $meanet3 = $et3/$numusers3;
	  $meanet3 = number_format((float) $meanet3, $precision, '.', '');
?>

<!DOCTYPE html>

<html>
<title>Lectures</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>


<nav class="w3-sidenav w3-deep-orange w3-card-12" style="width:19%">
  
  
	<img src="logo1.png" height="100" width="200">

  <br>
  <h1> Menu </h1>
  <a href="#">Edit Profile</a>
  <a href="lectures.php" style="color:blue">Lectures</a>
  <a href="#">Quizzes</a>
  <a href="#">Graphs</a>
  <a href="#">Time Table</a>
  <a href='logout.php'>Log out</a>

</nav>

<div style="margin-left:20%">
<header class="w3-container w3-deep-orange">

<h1> Lectures </h1>

</header>



	<div class="w3-container">
  <h4>Lecture 1  <?php echo "( estimated time: " . $meanet1 . " minutes)"; ?> <button onclick="location.href='lecture1.php';"> Start </button> </br> </h4>
  <h4>Lecture 2  <?php echo "( estimated time: " . $meanet2 . " minutes)"; ?>  <button onclick="location.href='lecture2.php';"> Start </button> </br> </h4>
  <h4>Lecture 3  <?php echo "( estimated time: " . $meanet3 . " minutes)"; ?>  <button onclick="location.href='lecture3.php';"> Start </button> </br> </h4>
   
 
	</div>

</div>
      
</body>
</html>
