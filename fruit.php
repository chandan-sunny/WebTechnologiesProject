<html>
<body align="center">
<?php
include 'connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
$fruit=$_POST["sear"];
$sql = "DELETE FROM myfruits WHERE name='$fruit'";

if ($conn->query($sql) === TRUE) {
    echo "fruit deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


}
$conn->close();
?>
<h1 align="center"><u>Delete ruits</u></h1>
<form method="post" action=""><br><br>
<h2 align="center" >Name:<input type="text" name="sear" /></h2>
<input type="submit" name="sub" value="delete" >
</form>
</body>
</html>
