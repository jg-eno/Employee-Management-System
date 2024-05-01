<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "startup_project";


$conn = new mysqli($servername, $username, $password, $dbname);

$un = $_POST["email"];
$pwd = $_POST["pass"];
$task = $_POST["task"];
$rate = $_POST["rate"];
$sql = "SELECT * FROM employees WHERE Email='$un'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
if($row["PASSWORD"] === $pwd)
{   $rate = $rate*10 + $row["Metric_Rating"];
    $task = $task.",".$row["Task"];
    $s = "UPDATE employees SET  Task='$task', Metric_Rating='$rate' where Email='$un'";
    $result = $conn->query($s);
    header("Location: RegSuccess.php");
    exit();
}
else
{
    header("Location: Task_Fail.php");
    exit();
}
?>