<?php 
session_start();
if(isset($_POST["smt"])){
    $user = $_POST["usr"];
    $pass = $_POST["pas"];
    $msg = "";

    if($user != "Admin"){
        $msg .= "<li>User name is incorrect</li>";
    }
    if($pass != "admin1"){
        $msg .= "<li>Password is incorrect</li>";
    }
    if(strlen($msg) > 0){
        echo "<font color='red'><ul>".$msg."</ul></font>";
    }
    else{
        $_SESSION["usr"] = "1";
        header("Location: dash.php");
        exit(); // Make sure to exit after a header redirect
    }
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
    <form action="login.php" name="form" method="post">
        Username: <input type="text" name="usr" required>
        Password: <input type="password" name="pas" required>
        <input type="submit" value="LOGIN" name="smt">
    </form>
</body>
</html>
