<?php

$use_nam=$_POST['use_nam'];
$use_eml=$_POST['use_eml'];
$use_mob=$_POST['use_mob'];
$use_pas1=$_POST['use_pas1'];
$use_pas2=$_POST['use_pas2'];
if($use_pas1==$use_pas2)
	{

	echo '<P><a href="login form.html">Click here to login :</P>';
	
	
	$ip="localhost";
	$user="id9957811_data";
	$password="12345";
	$dbname="id9957811_diganta";
	$path=mysqli_connect($ip,$user,$password,$dbname);
	$insert="INSERT INTO diganta SET name='$use_nam',email='$use_eml', mobile='$use_mob', password='$use_pas1'";
	$path->query($insert);
	
	}   
else
	{echo"password mismatched reload again to try";}
?>