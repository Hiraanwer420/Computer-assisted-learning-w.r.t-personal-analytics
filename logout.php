<?php
session_start();
session_destroy();
$link = "<script>window.location='index.html'</script>";
	echo $link;
//echo 'You have been logged out. <a href="index.html">Go back</a>';
?>