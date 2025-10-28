<?php
    session_start();
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        echo "<h1>Selamat Datang $username</h1>";
    }else{
        header("location: login.php");
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
    <form action="logout.php">
        <button type="submit">Logout</button>
    </form>
</body>
</html>