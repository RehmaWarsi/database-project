<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="cs";

echo "inside php";
print_r($_POST);

$Conn=mysqli_connect($servername,$username,$password,$database_name);
//check connection 
if(!$Conn)
{
	die("Connection failed:".mysqli_connect_error());
}
	
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['qualification']) 
    && isset($_POST['phone']) && isset($_POST['dob']) && isset($_POST['city']) && isset($_POST['experience']))
 {
 	echo "inside php";
 	$firstname=$_POST['firstname'];
 	$lastname=$_POST['lastname'];
	$qualification=$_POST['qualification'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$city=$_POST['city'];
	$experience=$_POST['experience'];


	
	


	$sql_querry="INSERT INTO job(firstname,lastname,qualification,phone,dob,city,experience)
	VALUES('$firstname','$lastname','$qualification','$phone','$dob','$city','$experience');";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo " for further actions wait for company reaction ";
		header("Location: Jobs.html");
		exit;
	}

	else
	{
		echo "ERROR:". $sql_querry. "" .mysqli_error($Conn);
	}
	mysqli_close($Conn);
}
?>