<html>
<body>
<?php
$servername = "localhost";
$username ="root";
$password = "root";
$dbname = "webtech";
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["user"];
$d=$_POST["pass"];
$e=$_POST["passv"];
$f=$_POST["emai"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSerT INTO signup VALUES ('$a','$b','$c','$d','$e','$f')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>