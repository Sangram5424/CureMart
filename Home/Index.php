<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Welcome to home page</p>
    <form action="../Logout.php">
        <input type="submit" value="Logout">
    </form>
</body>
</html>