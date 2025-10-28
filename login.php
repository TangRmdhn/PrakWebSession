<?php
    session_start();
    if (isset($_SESSION["username"])){
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cekLogin.php" method="POST">
        <label for="">username</label>
        <input type="text" name="username" placeholder="input username">
        <br>
        <label for="">password</label>
        <input type="text" name="password" placeholder="input password">
        <br>
        <button type="submit">login</button>
    </form>
</body>
</html>