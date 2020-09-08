<html>
<body>
<?php

include 'connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
$dis=$_POST["name"];
$que1="select * from myherbs where pcure='$dis';
$que2="select * from myfruits where pcure='$dis';
$que3="select * from myherbs where scure='$dis';
$que4="select * from myfruits where scure='$dis';
$result = $conn->query($que1);
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
}}$conn->close();

?>
<form method="post" action="">
Name of the disease :<input type="text" name="name"/>
<input type="submit"  value="Search"/>
</form>
</body>

</html>