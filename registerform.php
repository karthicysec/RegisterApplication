<?php
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$college=$_POST['college'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$subject=$_POST['subject'];
$conn = new mysqli('localhost','root','','student');
if ($conn->connect_error) {
die('Connection Failed : '.$conn->connect_error);
}
else
{
$sql = $conn->prepare("insert into 
register(first_name,last_name,college,email,phone_number,subject) values(?,?,?,?,?,?)");
$sql->bind_param("ssssis",$first_name,$last_name,$college,$email,$phone_number,$subject);
$sql->execute();
echo "...";
$sql->close();
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
 
<body><div class="res"><br><br>
<h2>Thanks for your Interest !!!</h2>
<h3>We will Contact you Zoon...!</h3>
</div>
</body>
</html>