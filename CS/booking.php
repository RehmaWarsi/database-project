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
	
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone']))
 {
 	echo "inside php";
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];


	$sql_querry="INSERT INTO clint(fullname,email,address,phone)
	VALUES('$fullname','$email','$address','$phone');";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo "person data entered successfully!";
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