<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        h1.head
        {
            text-align: left;
            margin-bottom: 20px;
            color: #008080;
            text-shadow:
                    0 0 7px #0fa,
                    0 0 10px #0fa,
                    0 0 21px #0fa,
                    0 0 42px #0fa,
                    0 0 82px #0fa,
                    0 0 92px #0fa,
                    0 0 102px #0fa,
                    0 0 151px #0fa;
            font-size: 30px;
        }
        a{
            text-decoration: none;
        }
        h1{
            text-align: center;
            margin-bottom: 20px;
            color: #0fa;
            text-shadow:
                    0 0 7px #0fa,
                    0 0 10px #0fa,
                    0 0 21px #0fa,
                    0 0 42px #0fa,
                    0 0 82px #0fa,
                    0 0 92px #0fa,
                    0 0 102px #0fa,
                    0 0 151px #0fa;
            font-size: 24px;
        }
        body {
            background-image: url("4k-tech-8ud1fgpt22qs67c7.jpg");
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: 	#008080;
            border: 1px solid #ccc;
            border-radius: 5px;
            opacity: 0.8;
        }
    </style>
</head>
<body>
<a href = "HomePage.php"><h1 class = "head">Cognitron</h1></a>
<div class="container">
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "startup_project";


$conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
    $previous_page_url = $_SERVER['HTTP_REFERER'];
if($previous_page_url === "http://localhost/Startup%20Project/Employee_Registration.php")
{
    echo "<h1>Employee Registered Successfully !!!</h1>";
}
elseif ($previous_page_url === "http://localhost/Startup%20Project/Task_Logger.php")
{
    echo "<h1>Task Logged Successfully !!!</h1>";
}
elseif ($previous_page_url === "http://localhost/Startup%20Project/Fire.php"){
    echo "<h1>Employee Fired Successfully !!!</h1>";
}
?>
</div>
</body>
</html>
