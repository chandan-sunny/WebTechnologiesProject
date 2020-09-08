
<html>
<head>
<title>Add Fruits</title>
</head>

<body style="background-color:#22ccff"><br><br>
<?php
include 'connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
$a=$_POST["Fruit_name"];
$b=$_POST["Fruit_feature"];
$c=$_POST["Primary_cure"];
$d=$_POST["Secondary_cure"];
$e=$_POST["Cost"];
$f=$_POST["Fruit_description"];

$sql = "INSERT INTO myfruits VALUES ('$a','$f','$b','$c','$d','$e')";

if ($conn->query($sql) === TRUE) {
    echo "details saved";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}
$conn->close();

?>


<h1 align="center"><u>Add Fruits</u></h1>
<form align="center" method="post" action=""><br><br>
<pre>
<h4 style="font-size:25;"> Fruit Name: <input type="text" name="Fruit_name" size="28"/></h4>
<h4 style="font-size:25;"><textarea name="Fruit_description" rows="5" cols="50" placeholder="enter the description of Fruit"></textarea>
<h4 style="font-size:25;">Fruit Feature:   <input type="text" name="Fruit_feature" size="25"/>
<h4 style="font-size:25;">Primary cure:   <input type="text" name="Primary_cure" size="25"/>
<h4 style="font-size:25;"> Secondary cure:<input type="text" name="Secondary_cure" size="25"/>
<h4 style="font-size:25;">Cost:        <input type="text" name="Cost" size="15"/><br><br>
<input type="submit" name="button" value="submit"/>
</pre>
</form>
</body>
</html>