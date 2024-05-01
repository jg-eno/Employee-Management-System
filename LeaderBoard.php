<html>
<head>
    <title>Leaderboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        .leaderboard {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .leaderboard-header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        .leaderboard-table {
            width: 100%;
            border-collapse: collapse;
        }

        .leaderboard-table th,
        .leaderboard-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .leaderboard-table th {
            background-color: #f2f2f2;
        }

        .leaderboard-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .leaderboard-table tbody tr:hover {
            background-color: #ddd;
        }

        .leaderboard-table td.rank {
            font-weight: bold;
            color: #4CAF50;
        }

        .leaderboard-table td.name {
            font-weight: bold;
        }

        .leaderboard-table td.score {
            font-weight: bold;
            color: #ff9800;
        }
        h1.head
        {
            text-align: left;
            margin-bottom: 20px;
            color: #008080;
            text-shadow:
                    0 0 7px #0fa,
                    0 0 10px #00ffaa,
                    0 0 21px #0fa,
                    0 0 42px #0fa,
                    0 0 82px #0fa,
                    0 0 92px #0fa,
                    0 0 102px #0fa,
                    0 0 151px #0fa;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href = "HomePage.php"><h1 class = "head">Cognitron</h1></a>
<div class="leaderboard">
<div class="leaderboard-header">
    Leaderboard
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "startup_project";


$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM employees order by Metric_Rating DESC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $c = 1;
    echo "<table class='leaderboard-table'><tr><th>Rank</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Designation</th><th>Metric Rating</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class =  'rank'>$c"."</td><td class = 'name'>".$row["First_Name"]."</td><td class = 'name'>".$row["Last_Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["Designation"]."</td><td class = 'score'>".$row["Metric_Rating"]."</td></tr>";
        $c++;
    }
    echo "</table>";
} else {
    echo "No employees found";
}
$conn->close();

?>
    <div>
</body>
</html>
