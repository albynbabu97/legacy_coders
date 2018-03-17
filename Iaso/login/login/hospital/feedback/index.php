<?php
session_start();
$conn = new mysqli("localhost", "root", "root","iaso");
if ($conn->connect_error) {
    die("Connection failed");
} 

$rate = $_POST['rate'];
$msg = $_POST['msg'];
$mobileno = $_SESSION['mobile'];
$regno =  $_POST['regno'];
$count = 1;


$result = mysqli_query($conn, "SELECT * FROM feedback
    WHERE regno IN ('$regno') AND mobileno IN ('$mobileno')");

while ($row = mysqli_fetch_array($result))
{	
header("Location: ../index.php");

mysqli_close($conn);
exit;
}
mysqli_query($conn, "insert into feedback VALUES('$regno','$msg','$mobileno','$rate','n')");
$results = mysqli_query($conn, "SELECT * FROM feedback
    WHERE regno IN ('$regno')");
	while ($row = mysqli_fetch_array($results))
{	
$count = $count+1;
}

mysqli_query($conn, "update dental set rate=(rate+ ($rate/$count)) where regno IN ('$regno')");

header("Location: ../index.php");
mysqli_close($conn);
exit;
?>