<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header">
    <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="Username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="Password_1">
        </div>
        <div class="input-group">
            <button type="submit" name="Login" class="btn">Login</button>
        </div>
        <p>
            Are you new? <a href="register.php">Sign up</a>
        </p>
    </form>
</body>
</html>