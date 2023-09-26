<?php
//connection start
$hostname="localhost";
$username="root";
$password="";
$dbname="login";

$con=mysqli_connect($hostname,$username,$password,$dbname);

if(!$con){
    die("connection failed".mysql_connect_error());
}
//connetion end

//displaying database data
if(isset($_POST["show"])){
    $sql="SELECT * FROM login";
    $result=mysqli_query($con,$sql);

    if(!$result){
        die("Query failed".mysqli_error($con));
    }

    if(mysqli_num_rows($result)>0){
        // echo "<table border='1'>";
        // echo"<tr> <th>Username</th> <th>password</th> </tr>";

        while($row=mysqli_fetch_assoc($result)){
            // echo"<tr>";
                echo"username->" .$row['Username']."<br>";
                echo"password->" .$row['Password']."<br>";
            // echo"</tr>";
        }
        // echo"</table>";
    }
    else{
        echo"Record not found";
    }
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dispalydatatable</title>
</head>
<body>
    <form action="displaydatatable.php" method="post">
        <input type="submit" value="show" name="show">
    </form>
</body>
</html>