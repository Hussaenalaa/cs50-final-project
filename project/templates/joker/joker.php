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
    <title>Joker</title>
    <link rel="stylesheet" href="../../static/joker/joker.css">
</head>
<body>
    <header>
        <h1>Cause Chaos with Joker</h1>
        <nav>
            <ul>
                <li><a href="#about">Laugh with Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="about">
            <h2>About Joker</h2>
            <p>Joker, the self-proclaimed Clown Prince of Crime, is a walking punchline with a flair for the dramatic. He's like the friend who always shows up uninvited to parties, but instead of bringing snacks, he brings chaos and mayhem. With his iconic laugh and unpredictable antics, Joker keeps Gotham City guessing and Batman on his toes. Whether he's pulling off elaborate pranks or trying to outwit the Dark Knight, Joker is always ready to turn the world upside down with a smile.</p>
        </section>
        <section id="services">
            <h2>Services</h2>
            <p>Welcome, <strong><?php echo $_SESSION["username"]; ?></strong>!</p>
            <p>Embrace the madness with Joker!</p>
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
                        $sql = "INSERT INTO joker (username, date) VALUES ('$username', '$date')";
                        
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
            <h3 style="color: red;">Special offer: Rent Joker and Harley Quinn for only $100! Cause double the trouble, but pay half the price!</h3>
            <h3 style="color: red;">Take care of your money, cause anyone like Joker can steal you.</h3>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Email: chaos@laughwithjoker.com</p>
            <p>Phone: 911 (or maybe not, who knows with Joker!)</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Laugh with Joker. All rights reserved, unless Joker decides otherwise!</p>
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
