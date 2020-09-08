<html>
<body align="center">
<?php
include 'connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$feed=$_POST["comment"];
$sql="insert into feedback values('$feed')";

if ($conn->query($sql) === TRUE) {
    echo "details saved";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}
$conn->close();
?>

<h1 align="center"><u>Feedback</u></h1>
<form method="POST" action="">
<textarea rows="10" cols="60" name="comment">Enter your Feedback</textarea>
<input type="submit" value="SUBMIT" />
</form>
</body>
</html>
