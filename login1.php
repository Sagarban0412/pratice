<?php
session_start();

$hostname = "localhost"; // Your database server hostname
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "TU"; // Your database name

// Create a connection to the database
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["login"])) {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Prevent SQL injection by escaping user inputs
    $escapedUsername = mysqli_real_escape_string($conn, $enteredUsername);

    // Fetch user data from the database based on the entered username
    $sql = "SELECT id, username, password FROM user WHERE username = '$escapedUsername'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPasswordFromDatabase = $row["password"];

        // Verify the entered password against the hashed password from the database
        if (password_verify($enteredPassword, $hashedPasswordFromDatabase)) {
            // Password is correct; login successful
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            header("Location: dash.php"); // Redirect to a dashboard or another page
            exit();
        } else {
            $loginError = "Incorrect password. Please try again.";
        }
    } else {
        $loginError = "User not found. Please check your username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login1.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="login" value="Login">
    </form>

    <?php if (isset($loginError)) : ?>
        <p style="color: red;"><?php echo $loginError; ?></p>
    <?php endif; ?>
</body>
</html>
