<?php
if(isset($_POST["choice1"]) || isset($_POST["choice2"]))
{
    if(isset($_POST["choice1"]))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "startup_project";
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        $stmt = $conn->prepare("DELETE FROM employees WHERE First_Name=? AND Last_Name=?");
        $stmt->bind_param("ss", $fn, $ln);

        if ($stmt->execute()) {
            // DELETE operation was successful
            header("Location: RegSuccess.php");
            exit();
        } else {
            // DELETE operation failed
            echo "Error deleting employee: " . $conn->error;
        }
    }
}
?>
