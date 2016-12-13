<?php

$q = $_GET['q'];
$string='';
$con = mysqli_connect('localhost','root','','fyp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"fyp");
$sql="SELECT * FROM dummy WHERE username= '".$q."'";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
	{
		$sug=$q . rand(10,100); 
		$sug1="ab235468cdefghigjklmn1234opqrstuvwxyz123456789";
		
 for ($i = 0; $i < rand(0,15); $i++) {
      $string .= $sug1[rand(0, strlen($sug1) - 1)];
 } 
	mysqli_select_db($con,"assign4");
$sql="SELECT * FROM dummy WHERE username= '".$sug."'";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
	if($num>0)
	{
		
	 echo "already exists  suggestions are :"."01".$sug." ,".$q.$string;
	 }
	else
	{
    echo  "already exists  suggestions are :".$sug." ,".$q.$string;
	}
	}
	else
	{
    echo "Available ";
	}
	
	
mysqli_close($con);
?>