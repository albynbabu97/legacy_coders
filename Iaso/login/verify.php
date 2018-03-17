<?php
session_start();
$conn = new mysqli("localhost", "root", "root","iaso");
if ($conn->connect_error) {
    die("Connection failed");
} 
$mobileno = $_POST['mobileno']; 
$password = $_POST['password'];
$result = mysqli_query($conn, "SELECT * FROM userl WHERE mobileno IN ('$mobileno') AND password IN ('$password')");

while ($row = mysqli_fetch_array($result))
{
$_SESSION['mobile']=$mobileno;
header("Location: login/index.php");
mysqli_close($conn);
exit;
}
echo "err";
header("Location: index.html");
mysqli_close($conn);
exit;
?>