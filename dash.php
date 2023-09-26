<?php
session_start();
if(!isset($_SESSION["usr"])){
    header("Location:Login.php");
    exit();
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
    <a href="logout.php"><p>please</p> <?php
    if(isset($_SESSION["usr"])){
        echo "logout";
    }
    ?></a>  
</body>
</html>