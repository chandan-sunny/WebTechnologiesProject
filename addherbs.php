<html>
<head>
<title>Add Herbs</title>
</head>

<body style="background-color:#22ccff"><br><br>
<?php
include 'connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
$a=$_POST["Herb_name"];
$b=$_POST["Herb_feature"];
$c=$_POST["Primary_cure"];
$d=$_POST["Secondary_cure"];
$e=$_POST["Cost"];
$f=$_POST["herb_description"];

$sql = "INSERT INTO myherbs VALUES ('$a','$f','$b','$c','$d','$e')";

if ($conn->query($sql) === TRUE) {
    echo "details saved";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}
$conn->close();

?>


<h1 align="center"><u>Add Herbs</u></h1>
<form align="center" method="post" action=""><br><br>
<pre>
<h4 style="font-size:25;"> Herb Name: <input type="text" name="Herb_name" size="28"/></h4>
<h4 style="font-size:25;"><textarea name="herb_description" rows="5" cols="50" placeholder="enter the description of herb"></textarea>
<h4 style="font-size:25;">Herb Feature:   <input type="text" name="Herb_feature" size="25"/>
<h4 style="font-size:25;">Primary cure:   <input type="text" name="Primary_cure" size="25"/>
<h4 style="font-size:25;"> Secondary cure:<input type="text" name="Secondary_cure" size="25"/>
<h4 style="font-size:25;">Cost:        <input type="text" name="Cost" size="15"/><br><br>
<input type="submit" name="button" value="submit"/>
</pre>
</form>
</body>
</html>