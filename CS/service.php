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
	
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['service']) && isset($_POST['phone']))
 {
 	echo "inside php";
 	$customer_id=$_POST['id'];
 	$name=$_POST['name'];
	$service_brief=$_POST['service'];
	$phone=$_POST['phone'];
	
	


	$sql_querry="INSERT INTO service(customer_id,name,service_brief,phone)
	VALUES('$customer_id','$name','$service_brief','$phone');";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo " service request accepted successfully!";
		header("Location: service.html");
		exit;
	}

	else
	{
		echo "ERROR:". $sql_querry. "" .mysqli_error($Conn);
	}
	mysqli_close($Conn);
}
?>