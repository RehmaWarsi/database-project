<?php
$servername="localhost";
$username="root";
$password="";
$database_name="cs";

// echo "inside php";

$Conn=mysqli_connect($servername,$username,$password,$database_name);
//check connection 
if(!$Conn)
{
	die("Connection failed:".mysqli_connect_error());
}

$sql = "SELECT * FROM clint;";
$result = mysqli_query($Conn, $sql);

$sql2 = "SELECT * FROM carbooking;";
$result2 = mysqli_query($Conn, $sql2);

$sql3 = "SELECT * FROM `service`;";
$result3 = mysqli_query($Conn, $sql3);

$sql4 = "SELECT * FROM `complain`;";
$result4 = mysqli_query($Conn, $sql4);

$sql5 = "SELECT * FROM `job`;";
$result5 = mysqli_query($Conn, $sql5);

// print_r($result);

// Display data in a table
if (mysqli_num_rows($result) > 0) {
    // print_r(mysqli_num_rows($result));
    $table = "<table>";
    $table .= "<tr><th>Name</th><th>Email</th><th>Address</th><th>Phone No.</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $table .= "<tr>";
        $table .= "<td>" . $row['fullname'] . "</td>";
        $table .= "<td>" . $row['email'] . "</td>";
        $table .= "<td>" . $row['address'] . "</td>";
        $table .= "<td>" . $row['phone'] . "</td>";
        $table .= "</tr>";
    }
    $table .= "</table>";
    // print_r($table);
} if (mysqli_num_rows($result2) > 0) {
    // print_r(mysqli_num_rows($result));
    $table2 = "<table>";
    $table2 .= "<tr><th>Id</th><th>Name</th><th>Car Type</th><th>Transmission</th><th>Special Request</th></tr>";
    while ($row = mysqli_fetch_assoc($result2)) {
        $table2 .= "<tr>";
        $table2 .= "<td>" . $row['id'] . "</td>";
        $table2 .= "<td>" . $row['name'] . "</td>";
        $table2 .= "<td>" . $row['cartype'] . "</td>";
        $table2 .= "<td>" . $row['transmission'] . "</td>";
        $table2 .= "<td>" . $row['specialrequest'] . "</td>";
        $table2 .= "</tr>";
    }
    $table2 .= "</table>";
    // print_r($table);
} if (mysqli_num_rows($result4) > 0) {
    // print_r(mysqli_num_rows($result));
    $table4 = "<table>";
    $table4 .= "<tr><th>Id</th><th>Name</th><th>Email</th><th>Complain</th></tr>";
    while ($row = mysqli_fetch_assoc($result4)) {
        $table4 .= "<tr>";
        $table4 .= "<td>" . $row['id'] . "</td>";
        $table4 .= "<td>" . $row['name'] . "</td>";
        $table4 .= "<td>" . $row['email'] . "</td>";
        $table4 .= "<td>" . $row['complain'] . "</td>";
        $table4 .= "</tr>";
    }
    $table4 .= "</table>";
    // print_r($table);
} if (mysqli_num_rows($result3) > 0) {
    // print_r(mysqli_num_rows($result));
    $table3 = "<table>";
    $table3 .= "<tr><th>Id</th><th>Name</th><th>Name</th><th>Service Brief</th><th>Phone</th></tr>";
    while ($row = mysqli_fetch_assoc($result3)) {
        $table3 .= "<tr>";
        $table3 .= "<td>" . $row['id'] . "</td>";
        $table3 .= "<td>" . $row['customer_id'] . "</td>";
        $table3 .= "<td>" . $row['name'] . "</td>";
        $table3 .= "<td>" . $row['service_brief'] . "</td>";
        $table3 .= "<td>" . $row['phone'] . "</td>";
        $table3 .= "</tr>";
    }
    $table3 .= "</table>";
    // print_r($table);
} if (mysqli_num_rows($result5) > 0) {
    // print_r(mysqli_num_rows($result));
    $table5 = "<table>";
    $table5 .= "<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Qualification</th><th>Phone</th><th>Date Of Birth</th><th>Experience</th><th>Id</th></tr>";
    while ($row = mysqli_fetch_assoc($result5)) {
        $table5 .= "<tr>";
        $table5 .= "<td>" . $row['id'] . "</td>";
        $table5 .= "<td>" . $row['firstname'] . "</td>";
        $table5 .= "<td>" . $row['lastname'] . "</td>";
        $table5 .= "<td>" . $row['qualification'] . "</td>";
        $table5 .= "<td>" . $row['phone'] . "</td>";
        $table5 .= "<td>" . $row['dob'] . "</td>";
        $table5 .= "<td>" . $row['city'] . "</td>";
        $table5 .= "<td>" . $row['experience'] . "</td>";
        $table5 .= "</tr>";
    }
    $table5 .= "</table>";
    // print_r($table);
} 


?>

<!DOCTYPE html>
<html>
<head>
  <title>Car Showroom Sales</title>
  <style>
    table {
  border-collapse: collapse;
  width: 100%;
}

table th, table td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

table th {
  background-color: #f2f2f2;
  font-weight: bold;
}

table tr:hover {
  background-color: #f5f5f5;
}
    </style>
</head>
<body>
  <h1>Car Showroom Sales</h1>

  <h1>Client List</h1>
  <div id="clients"></div>

  <h1>Car Bookings</h1>
  <div id="bookings"></div>

  <h1>Services</h1>
  <div id="services"></div>

  <h1>Complains</h1>
  <div id="complains"></div>

  <h1>Job Applications</h1>
  <div id="jobs"></div>


    <!-- echo "<table>
            <tr>
              <th>Car</th>
              <th>Price</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['car'] . "</td>";
      echo "<td>" . $row['price'] . "</td>";
      echo "</tr>";

      // Calculate sum
      $sum += $row['price'];
    }

    echo "</table>";

    echo "<p>Total sales: " . $count . "</p>";
    echo "<p>Total revenue: $" . $sum . "</p>";
  } else {
    echo "<p>No sales found.</p>";
  }

  // Close the database connection
  mysqli_close($conn);
  ?> -->

  <script>
    var table = "<?php echo $table; ?>";
    document.getElementById("clients").innerHTML = table;

    var table2 = "<?php echo $table2; ?>";
    document.getElementById("bookings").innerHTML = table2;

    var table3 = "<?php echo $table3; ?>";
    document.getElementById("services").innerHTML = table3;

    var table4 = "<?php echo $table4; ?>";
    document.getElementById("complains").innerHTML = table4;

    var table5 = "<?php echo $table5; ?>";
    document.getElementById("jobs").innerHTML = table5;
  </script>
</body>
</html>