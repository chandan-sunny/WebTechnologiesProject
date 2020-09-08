<html>
<head>
<style type="text/css">
table{
	background-color:#00ccff;
}
th{
	text-align:center;
}
td{
	text-align:center;
}
</style>
</head>
<h1 align="center"><u>View herbs</u></h1>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webtech";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT name,descp,feature,pcure,scure,cost from myherbs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<table border='2px' style='border-collapse:collapse;color:white' align='center' width='100%'> ";
	echo "<tr>";
	echo "<th>"."Herb Name"."</th>"."<th>"."Disease"."</th>"."<th>"."Cost"."</th>"."<th>"."Description"."</th>"."<th>"."Feature"."</th>";
	echo "</tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
        echo "<td>". $row["name"]."</td>"."<td>". $row["pcure"]."<br>". $row["scure"]."</td>"."<td>". $row["cost"] ."</td>"."<td>". $row["descp"] ."</td>"."<td>". $row["feature"] ."</td>";
    echo "</tr>";
	}
	echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
</html>