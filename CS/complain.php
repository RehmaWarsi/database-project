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
	
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['complain']))
 {
 	echo "inside php";

 	$name=$_POST['name'];
	$email=$_POST['email'];
	$complain=$_POST['complain'];
	
	

	$sql_querry="INSERT INTO complain(`name`,`email`,`complain`)
	VALUES('$name','$email','$complain');";


	if (mysqli_query($Conn,$sql_querry))
	{
		echo "complain registered";
		header("Location: contact.html");
		exit;
	}

	else
	{
		echo "ERROR:". $sql_querry." ".mysqli_error($Conn);
	}
	mysqli_close($Conn);
}else{
	echo"not going inside post";
}
?>