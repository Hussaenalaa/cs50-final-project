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
    <title>Batman</title>
    <link rel="stylesheet" href="../../static/batman/bat.css">
</head>
<body>
    <header>
        <h1>Rent a Superhero</h1>
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
            <h2>About Batman</h2>
            <p>Batman, also known as Bruce Wayne, is a nocturnal vigilante with a fondness for dramatic capes and growling at villains. When he's not lurking in the shadows, he's a billionaire who moonlights as a bat-themed crimefighter, much to the confusion of his butler, Alfred. With his trusty Batmobile and an endless supply of brooding stares, Batman is the hero Gotham needs, whether it's for battling bad guys or attending awkward Wayne Manor galas.</p>
        </section>
        <section id="services">
            <h2>Services</h2>
            <p>Welcome, <strong><?php echo $_SESSION["username"]; ?></strong>!</p>
            <p>Rent Batman for your next event!</p>
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
                        $sql = "INSERT INTO batman (username, date) VALUES ('$username', '$date')";
                        
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
            <h3 style="color: black;">Take Batman and Robin now for only $100!</h3>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Email: info@rentasuperhero.com</p>
            <p>Phone: For emergencies, just shine the Bat-Signal!</p>   
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Rent a Superhero. All rights reserved Until Batman Kills Joker.</p>
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
