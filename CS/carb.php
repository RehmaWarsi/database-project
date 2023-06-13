<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="cs";

echo "inside php";

$Conn=mysqli_connect($name,$cartype,$transmission,$specialrequest,$CS);
//check connection 
if(!$Conn)
{
	die("Connection failed:".mysqli_connect_error());
}
	
if (isset($_POST['save']))
 {
 	echo "inside php";
 	$name=$_POST['name'];
	$cartype=$_POST['cartype'];
	$transmission=$_POST['transmission'];
	$specialrequest=$_POST['specialrequest'];
	


	$sql_querry="INSERT INTO carbooking(name,cartype,transmission,specialrequest)
	VALUES('$name','$cartype','$transmission','$specialrequest');";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo " car booked successfully!";
	}

	else
	{
		echo "ERROR:". $sql_querry. "" .mysqli_error($Conn);
	}
	mysqli_close($Conn);
}
?>