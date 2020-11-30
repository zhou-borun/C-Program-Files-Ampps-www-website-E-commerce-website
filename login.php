<?php
$f = date("l jS F");

echo '<!DOCTYPE html>
<html>
    <head>
        <link href="./login.css" rel="stylesheet" type="text/css">
        <title>Login</title>
    </head>
    <body>
        <div clas="app">
        <div class="container"></div>
            <form action="page.php" method="POST">
                <h1 class="title">Log in</h1>
                <input type="email" class="email" placeholder="Enter your email" name="email" required>
                <input type="password" class="password" placeholder="Enter your password" name="password" required>
                <button type="submit" class="login-btn">Log in</button>
                <a href="sign.html" class="s">Create Acount</a>
            </form>
        </div>
    </body>
</html>';

switch($f){
    case "Sunday 30th November":
        echo '<img src="saint.jpg">';
    break;
    case "Monday 31th November":
        echo '<img src="pere%20noel%20login.jpg">';
    break;
    case "Tuesday 1th December":
        echo '<img src="s.jpg">';
        echo "Discover the collection in winter";
    break;
    case "Monday 31th November":
        echo '<img src="pere%20noel%20login.jpg">';
    break;
    case "Saturday 26th December":
        echo '<img src="pere%20noel%20login.jpg">';
    break;
    case "Friday 1th January":
        echo '<img src="5889ec98812005aa65ae0a4a2d74ce12%20(1).jpg">';
    break;
}
?>