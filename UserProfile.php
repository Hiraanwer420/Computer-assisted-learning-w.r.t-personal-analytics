
<!DOCTYPE html>

<html>
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>


<nav class="w3-sidenav w3-deep-orange w3-card-12" style="width:19%">
  
  
	<img src="logo1.png" height="100" width="200">

  <br>
  <h1> Menu </h1>
  <a href="#">Edit Profile</a>
  <a href="lectures.php">Lectures</a>
  <a href="#">Quizzes</a>
  <a href="#">Graphs</a>
  <a href="#">Time Table</a>
  <a href='logout.php'>Log out</a>

</nav>

<div style="margin-left:20%">
<header class="w3-container w3-deep-orange">

<?php 
session_start();    
   echo "<h1>Welcome, ".$_SESSION["username"] . "</h1>"; 
?>

</header>


<div class="w3-container">
  
  </div>

</div>
      
</body>
</html>
