<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="cs";

echo "inside php";

$Conn=mysqli_connect($servername,$username,$password,$database_name);
//check connection 
if(!$Conn)
{
	die("Connection failed:".mysqli_connect_error());
}
print_r($_POST);
	
if (isset($_POST['name']) && isset($_POST['car']) && isset($_POST['transmission']) && isset($_POST['SR']))
 {
 	echo "inside php";
 	$name=$_POST['name'];
	$cartype=$_POST['car'];
	$transmission=$_POST['transmission'];
	$specialrequest=$_POST['SR'];
	


	$sql_querry="INSERT INTO carbooking(name,cartype,transmission,specialrequest)
	VALUES('$name','$cartype','$transmission','$specialrequest');";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo " car booked successfully!";
		header("Location: carb.html");
		exit;
	}

	else
	{
		echo "ERROR:". $sql_querry. "" .mysqli_error($Conn);
	}
	mysqli_close($Conn);
}
?>