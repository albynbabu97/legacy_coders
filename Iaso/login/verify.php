<?php
session_start();
$conn = new mysqli("localhost", "root", "root","iaso");
if ($conn->connect_error) {
    die("Connection failed");
} 
$idno = $_POST['idno']; 
$password = $_POST['password'];
$result = mysqli_query($conn, "SELECT * FROM userl u,users s WHERE s.idno IN ('$idno') AND u.password IN ('$password')");

while ($row = mysqli_fetch_array($result))
{
$_SESSION['idno']=$idno;
header("Location: login/index.php");
mysqli_close($conn);
exit;
}
echo "err";
header("Location: index.html");
mysqli_close($conn);
exit;
?>