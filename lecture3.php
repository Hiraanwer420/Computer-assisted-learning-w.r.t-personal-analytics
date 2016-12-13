<?php
session_start();
?>


<html>
<title> Lecture 3 </title>
<head>
<script type="text/javascript">
var timerVar = setInterval(countTimer, 1000);
var a,b,c;
var totalSeconds = 15;
function countTimer() {
   ++totalSeconds;
   var hour = Math.floor(totalSeconds /3600);
   var minute = Math.floor((totalSeconds - hour*3600)/60);
   var seconds = totalSeconds - (hour*3600 + minute*60);
	a=hour;
	b=minute;
	c=seconds;
	if (c==31 || c==59)
	{
	alert("Are you still there?");
	window.location.href="etdummy3.php?ts="+0.5;
	}
   document.getElementById("timer").innerHTML = hour + ":" + minute + ":" + seconds;
   
}


</script>
</head>


<body>
<div id="timer"></div>

	<?php 
   echo "Lets start studying, ".$_SESSION["username"]; 

?>

	<p> This is lecture 3 </p>

</body>
</html>