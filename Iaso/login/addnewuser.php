<?php
$conn = new mysqli("localhost", "root", "root","iaso");
if ($conn->connect_error) {
    die("Connection failed");
} 
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$mobileno = $_POST['mobileno'];
$mail =  $_POST['email'];
$password =  $_POST['password'];
$idno =  $_POST['idno'];
$desig = $_POST['desig'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE mobileno IN ('$mobileno')");

while ($row = mysqli_fetch_array($result))
{	
header("Location: signup.html");
mysqli_close($conn);
exit;
}
mysqli_query($conn, "insert into userl(mobileno,password) VALUES('$mobileno','$password')");
mysqli_query($conn, "insert into users(mobileno,fname,lname,email,idno,desig) VALUES('$mobileno','$firstname','$lastname','$mail','$idno','desig')");
mysqli_query($conn, "insert into userloc(mobileno,place) VALUES('$mobileno','kochi')");

header("Location: index.html");
mysqli_close($conn);
exit;
?>