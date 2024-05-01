<html>
<head>
    <link rel = "stylesheet" href="Table.css">
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href = "HomePage.php"><h1 class = "head">Cognitron</h1></a>
<h1>Employee Bio-Data</h1>
<?php   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "startup_project";


$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Country</th><th>Date Of Birth</th><th>Gender</th><th>Country Code</th><th>Phone</th><th>Designation</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Country"]."</td><td>".$row["Date_Of_birth"]."</td><td>".$row["Gender"]."</td><td>".$row["Country_Code"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["Designation"]."</td></tr>";

    }
    echo "</table>";
} else {
    echo "No employees found";
}
$conn->close();

?>
</body>
</html>
