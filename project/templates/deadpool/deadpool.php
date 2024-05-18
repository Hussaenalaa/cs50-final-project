<?php
    // Start session to access session data
    session_start();

    // Check if session variable for username is set
    if(isset($_SESSION["username"])) {
        // Proceed with displaying the page content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deadpool</title>
    <link rel="stylesheet" href="../../static/deadpool/deadpool.css">
</head>
<body>
    <header>
        <h1>Get Crazy with Deadpool</h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="about">
            <h2>About Deadpool</h2>
            <p>Deadpool, the Merc with a Mouth, is not your typical superhero. He's a wisecracking anti-hero with a penchant for breaking the fourth wall and making pop culture references. Armed with his regenerative healing factor and an arsenal of weapons, Deadpool is always ready for action, adventure, and chimichangas!</p>
        </section>
        <section id="services">
            <h2>Services</h2>
            <p>Welcome, <strong><?php echo $_SESSION["username"]; ?></strong>!</p>
            <p>Rent Deadpool for your next event!</p>
            <!-- Add input field for choosing date -->
            <form action="" method="post">
                <label for="date" style="color: white;">Select a Date to Unleash Chaos:</label>
                <input type="date" id="date" name="date">
                <input type="submit" name="submit">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $sname = "localhost";
                    $uname = "root";
                    $password = "";
                    $db_name = "heros_login";
                
                    $conn = mysqli_connect($sname, $uname, $password, $db_name);
                
                    if (!$conn) {
                        echo "Connection Failed: " . mysqli_connect_error();
                    }
                
                    if (isset($_POST["submit"])) {
                        $date = $_POST['date'];
                        $username = $_SESSION["username"];
                        $sql = "INSERT INTO deadpool (username, date) VALUES ('$username', '$date')";
                        
                        if (mysqli_query($conn, $sql)) {
                            echo "<div class='success-message'>Added successfully!</div>";
                        } else {
                            echo "<div class='error-message'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
                        }
                    }
                
                    // Close the database connection
                    mysqli_close($conn);
                }
            ?>
        
            <h3 style="color: red;">Special offer: Take A Free Ticket For His New Move </h3>
            <h3 style="color: red;">Warning: Deadpool's jokes may be rated R. Viewer discretion is advised!</h3>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Email: crazymask@deadpoolventures.com</p>
            <p>Phone: Sorry, His Two Hands Are Broken Right Now</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Deadpool Ventures. All rights reserved, unless Deadpool decides to steal them!</p>
    </footer>
</body>
</html>
<?php
    } else {
        // If no user is logged in, redirect to the login page
        header("Location: login.php");
        exit();
    }
?>
