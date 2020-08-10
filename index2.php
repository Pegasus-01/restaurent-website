$use_pas1=$_POST['use_pas1'];
$use_mob=$use_eml;


	$ip="localhost";
	$user="id9957811_data";
	$password="12345";
	$dbname="id9957811_diganta";
    $connection=mysqli_connect($ip,$user,$password,$dbname);
	$select="SELECT * FROM diganta WHERE 
	         email='$use_eml'and password='$use_pas1'
	         or mobile='$use_mob' and password='$use_pas1'";
	$result=($connection->query($select));
	$num=mysqli_num_rows($result);

	if($num>0)
	{
		echo'<P><a href="index.html">Click here to go home :</P>';
	}
	else
	{
		echo"password or user id wrong";
	}

?>