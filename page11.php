<?php

session_start();

$con = mysqli_connect('localhost:8080','root','');
    
mysqli_select_db($con,'userregistration');

$fli=$_SESSION['src'];

$nam = $_POST['name'];
$typ = $_POST['type'];
$gen = $_POST['gender'];
$nam2 = $_POST['name2'];
$typ2 = $_POST['type2'];
$gen2 = $_POST['gender2'];






$reg = "insert into passenger (flight_no,name,type,gender) values ('$fli','$nam','$typ','$gen')";
$reg1 = "insert into passenger (flight_no,name,type,gender) values ('$fli','$nam2','$typ2','$gen2')";
    
    mysqli_query($con,$reg);
    mysqli_query($con,$reg1);

    echo"Enquiry Subitted !";
    
$s = "select * from flight_schedule NATURAL JOIN passenger";

$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);


if ($num > 0) {
  echo '<table border="2" cellspacing="2" cellpadding="2"><tr><th>Flight_no</th><th>Date</th><th>Flight Name</th><th>Source</th><th>Destination</th><th>Arrival</th><th>departure</th><th>Duration</th><th>Passenger Name</th><th>Gender</th><th>Type</th></tr>';
  while($row = $result->fetch_assoc()) {
     echo "<form action='abc.php' method='post'><tr><td class='fn'>".$row["flight_no"]."</td><td>".$row["current_date_time"]."</td><td>".$row["flight_name"]."</td><td>".$row["source"]."</td><td>".$row["destination"]."</td><td>".$row["arrival"]."</td><td>".$row["departure"]."</td><td>".$row["duration"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["type"]."</td></tr></form>";
  }
} else {
  
}



?>

<html>
<head>
	<title> Fights </title>
	<link rel="Stylesheet" href="Style.css">
	<style> 
		table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
    color:black;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
        .para
        {
            color:greenyellow;
        }
	</style>
</head>

<body>

<p class="para">BOOKED TICKETS</p>
    <button href=../indexhi.html>Home</button>
</body>    
</html>