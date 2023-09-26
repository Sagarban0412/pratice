<?php
$hostname="localhost";
$username="root";
$password="";
$database="login";

//create a connection to the database
$con=mysqli_connect($hostname, $username, $password, $database);

//check for connection
if(!$con){
    die("connection failed".mysql_connect_error());
}

//get the data from the form
// Get the data from the form
$user = ($_POST['user']);
$pass = ($_POST['pass']);


//sql query to insert data into the datbase
$sql="INSERT INTO `login`(`Username`, `Password`) VALUES ('$user', '$pass')";

//check data is inserted or not
if(mysqli_query($con,$sql)){
    echo "data inserted sucessfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//closing the connection
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DataBase connection</title>
</head>
<body>
<form action="databaseconnect.php" method="post">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass" id="pass"><br>
    <input type="submit" value="Login" name="smt"><br>
</form>
</body>
</html>