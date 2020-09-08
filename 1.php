<html>

<body>
<?php
include 'connect.php';if($_SERVER["REQUEST_METHOD"] == "POST")
{
$var=$_POST["name"];
$que1="select * from myherbs where pcure='$var'";
$result = $conn->query($que1);
if ($result->num_rows > 0) {
	echo "<table border='2px' style='border-collapse:collapse;color:red' align='center' width='100%'> ";
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
    echo "";
}

$que1="select * from myherbs where scure='$var'";

$result = $conn->query($que1);
if ($result->num_rows > 0) {
	echo "<table border='2px' style='border-collapse:collapse;color:red' align='center' width='100%'> ";
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
    echo "";
}
$que1="select * from myfruits where pcure='$var'";

$result = $conn->query($que1);
if ($result->num_rows > 0) {
	echo "<table border='2px' style='border-collapse:collapse;color:red' align='center' width='100%'> ";
	echo "<tr>";
	echo "<th>"."fruit Name"."</th>"."<th>"."Disease"."</th>"."<th>"."Cost"."</th>"."<th>"."Description"."</th>"."<th>"."Feature"."</th>";
	echo "</tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
        echo "<td>". $row["name"]."</td>"."<td>". $row["pcure"]."<br>". $row["scure"]."</td>"."<td>". $row["cost"] ."</td>"."<td>". $row["descp"] ."</td>"."<td>". $row["feature"] ."</td>";
    echo "</tr>";
	}
	echo "</table>";
} else {
    echo "";
}

$que1="select * from myfruits where scure='$var'";

$result = $conn->query($que1);
if ($result->num_rows > 0) {
	echo "<table border='2px' style='border-collapse:collapse;color:red' align='center' width='100%'> ";
	echo "<tr>";
	echo "<th>"."fruit Name"."</th>"."<th>"."Disease"."</th>"."<th>"."Cost"."</th>"."<th>"."Description"."</th>"."<th>"."Feature"."</th>";
	echo "</tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
        echo "<td>". $row["name"]."</td>"."<td>". $row["pcure"]."<br>". $row["scure"]."</td>"."<td>". $row["cost"] ."</td>"."<td>". $row["descp"] ."</td>"."<td>". $row["feature"] ."</td>";
    echo "</tr>";
	}
	echo "</table>";
} else {
    echo "";
}



}
$conn->close();
?>
<form method="post" action="">
name of the disease:<input type="text" name="name">
<br>
<input type="submit" value="search">

</form>

</body>
</html>