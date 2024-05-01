<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $first = $_POST["first-name"];
    $second = $_POST["last-name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $country_code = $_POST["coc"];
    $phone = $_POST["phone"];
    $designation = $_POST["des"];
    $pwd = $_POST["pass"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "startup_project";


    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO employees (First_Name,Last_Name, Email,Address,Country,Date_Of_birth,Gender,Country_Code,Phone_Number,Designation,PASSWORD) VALUES ('$first', '$second', '$email', '$address','$country','$dob','$gender','$country_code','$phone','$designation','$pwd')";
    if ($conn->query($sql) === TRUE) {
        header("Location: RegSuccess.php");
        exit();
    } else {
        header("Location: RegFail.php");
        exit();
    }
    $conn->close();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
?>

