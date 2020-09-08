
<html>
<head>
<?php
include 'connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$user=$_POST["username"];
$passwo=$_POST["password"];
   $sql="select * from signup where user='$user' and pass='$passwo'";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
header('Location:https://localhost/webda/loginpage.html');
exit();
}
else
{
echo "invalid credentials";
}
}
$conn->close();
?>

<style>
.button
{
background-color:white;
color:rgb(255,0,191);
padding:15px 30px;
text-align:center;
font-size:16px;

cursor:pointer;
}
</style>
</head>

<body style='background-image:url("userpic.jpeg");background-repeat:no-repeat;background-size:1375px 640px'>
<body align="center">
<form  action="" method="post"><br><br><br><br><br><br><br><br><br>
<font color="black">
<h2 style="color:rgb(255,0,102);font-size:30;">User-Name : <input type="text" name="username" size="26"/></h2>
<h2 style="color:rgb(255,0,102);font-size:30">Password : <input type="password" name="password" size="25"/></h2><br></font>
<input type="submit" value="login">
</form>
</body>
</html>