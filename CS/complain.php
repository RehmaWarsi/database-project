<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="cs";

echo "inside php";

$Conn=mysqli_connect($name,$email,$complain,$CS);
//check connection 
if(!$Conn)
{
	die("Connection failed:".mysqli_connect_error());
}
	
if (isset($_POST['save']))
 {
 	echo "inside php";

 	$name=$_POST['name'];
	$email=$_POST['email'];
	$complain=$_POST['complain']
	;
	


	$sql_querry="INSERT INTO complain(name,email,complain)
	VALUES('$name','$email','$complain')";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo "complain registered";
	}

	else
	{
		echo "ERROR:". $sql_querry." ".mysqli_error($Conn);
	}
	mysqli_close($Conn);
}
?>