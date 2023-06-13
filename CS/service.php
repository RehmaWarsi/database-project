<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="cs";

echo "inside php";

$Conn=mysqli_connect($customer_id,$name,$servie_brief,$phone,$CS);
//check connection 
if(!$Conn)
{
	die("Connection failed:".mysqli_connect_error());
}
	
if (isset($_POST['save']))
 {
 	echo "inside php";
 	$customer_id=$_POST['customer_id']
 	$name=$_POST['name'];
	$servie_brief=$_POST['servie_brief'];
	$phone=$_POST['phone'];
	
	


	$sql_querry="INSERT INTO service(customer_id,name,service_brief,phone)
	VALUES('$customer_id','$name','$service_brief','$phone');";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo " service request accepted successfully!";
	}

	else
	{
		echo "ERROR:". $sql_querry. "" .mysqli_error($Conn);
	}
	mysqli_close($Conn);
}
?>