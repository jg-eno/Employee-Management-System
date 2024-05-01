<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "startup_project";


$conn = new mysqli($servername, $username, $password, $dbname);

$un = $_POST["email"];
$pwd = $_POST["pass"];
$sql = "SELECT * FROM employees WHERE Email='$un'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
if($row["PASSWORD"] === $pwd) {
    header("Location: HomePage.php");
    exit();
}
else
{
    header("Location: Login_Fail.php");
    exit();
}
?>