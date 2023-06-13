<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="cs";

echo "inside php";

$Conn=mysqli_connect($firstname,$lastname,$qualification,$phone,$dob,$city,$experience,$CS);
//check connection 
if(!$Conn)
{
	die("Connection failed:".mysqli_connect_error());
}
	
if (isset($_POST['save']))
 {
 	echo "inside php";
 	$firstname=$_POST['firstname']
 	$lastname=$_POST['lastname'];
	$qualification=$_POST['qualification'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$city=$_POST['city'];
	$experience=$_POST['experience'];


	
	


	$sql_querry="INSERT INTO job(firstname,lastname,qualificatiom,phone,dob,city,experience)
	VALUES('$firstname','$lastname','$qualificatiom','$phone','$dob','$city','$experience');";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo " for further actions wait for company reaction ";
	}

	else
	{
		echo "ERROR:". $sql_querry. "" .mysqli_error($Conn);
	}
	mysqli_close($Conn);
}
?>