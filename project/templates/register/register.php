<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../static/register/style.css">
</head>
<body>
    <?php
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "heros_login";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        echo "Connection Failed: " . mysqli_connect_error();
    }

    if (isset($_POST["submit"])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number']; // Corrected name attribute
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, email, phone_number, password) VALUES ('$username', '$email', '$phone_number', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "<div class='success-message'>Registration successful!</div>";
            echo "<div class='login-link'>Now <a href='../../templates/login/login.php'>Login</a></div>";
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
    <div class="login-container">
        <h2>Register</h2>
        <form action="" method="post">

            <!-- user name-->
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <!--  email -->
            <div class="input-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
            </div>
            <!-- phone number -->
            <div class="input-group">
                <label for="phone_number">Phone Number:</label><br>
                <input type="number" id="phone_number" name="phone_number" required> <!-- Corrected name attribute -->
            </div>

            <!--  password -->
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">Register</button>
        </form>
    </div>
</body>
</html>
