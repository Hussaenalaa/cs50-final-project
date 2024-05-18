<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../static/login/style.css">
</head>
<body>
    <?php
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "heros_login";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Hash the password
        $hashed_password = md5($password);

        $sql =   $qry = "SELECT * FROM users WHERE username='$username' AND password='$password'";;
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) > 0) {
            // Start session and store username
            session_start();
            $_SESSION['username'] = $username;
            header("location: ../../templates/home/homepage.html");
            exit(); 
        } else {
            echo "<script>alert('Login Failed. Please try again.');</script>";
        }
    }
    ?>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <h5>Don't Have an Account? <a href="../../templates/register/register.php">Register</a></h5>
    </div>
</body>
</html>
