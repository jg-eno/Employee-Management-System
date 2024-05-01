<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Table.css">
    <style>
        .form-group {
            margin-bottom: 10px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href = "HomePage.php"><h1 class = "head">Cognitron</h1></a>
<br><br>
<div class="container">
<h1>Fire !!!</h1>
<form method="POST" action="Fire.php">
    <div class="form-group">
        <label for="fn">Enter the First Name</label>
        <input type="text" id="fn" name="fn" required><br>
    </div>
    <div class="form-group">
        <label for="ln">Enter the Last Name</label>
        <input type="text" id="ln" name="ln" required>
    </div><br><br>
    <button type="submit" class="btn">Submit</button><br><br>
</form>
</div>

<?php
if(isset($_POST["fn"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "startup_project";

    $fn = $_POST["fn"];
    $ln = $_POST["ln"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM employees WHERE First_Name='$fn' AND Last_Name='$ln'";
    $result = $conn->query($sql);
    echo "<br><br>";
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Country</th><th>Date Of Birth</th><th>Gender</th><th>Country Code</th><th>Phone</th><th>Designation</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Country"]."</td><td>".$row["Date_Of_birth"]."</td><td>".$row["Gender"]."</td><td>".$row["Country_Code"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["Designation"]."</td></tr>";
        }

        echo "</table>";

        echo "<h2>Are you sure you want to fire this employee</h2>";
        echo "<form method='post' action='Delete.php'>";
        echo "<input type='radio' id='yes' name='choice1' value='YES'>";
        echo "<label for='yes'>YES</label>";
        echo "<input type='radio' id='no' name='choice2' value='NO'>";
        echo "<label for='no'>NO</label><br><br><br>";
        echo "<input type='hidden' name='fn' value='$fn'>";
        echo "<input type='hidden' name='ln' value='$ln'>";
        echo "<button type='submit' class = 'butn'>Submit</button>";
        echo "</form>";
    } else {
        header("Location: Fire_Fail.php");
        exit();
    }
    mysqli_close($conn);
}
?>
</body>
</html>
