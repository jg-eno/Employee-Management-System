<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1
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
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href = "HomePage.php"><h1>Cognitron</h1></a>
<div class="container">
    <form class="registration-form" method="POST" action="Task.php">
        <h1>Task Logger</h1>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your Email" required>
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" placeholder="Enter your password" required>
        </div>
        <div class="form-group"> <label for="des">Task</label>
            <input type="text" id="task" name="task" placeholder="Enter your Task" required>
        </div>
        <div class = "form-group">
            <label for="des">Customer Rating</label>
            <select name = "rate" id = "rate" type = "number" required>
                <option data-Rate="1" value="1">1</option>
                <option data-Rate="2" value="2">2</option>
                <option data-Rate="3" value="3">3</option>
                <option data-Rate="4" value="4">4</option>
                <option data-Rate="5" value="5">5</option>
            </select>
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>
</body>
</html>
