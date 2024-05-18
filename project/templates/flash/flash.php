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
    <title>Flash</title>
    <link rel="stylesheet" href="../../static/flash/flash.css">
</head>
<body>
    <header>
        <h1>Speed into Adventure with Flash</h1>
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
            <h2>About Flash</h2>
            <p>Flash, the Scarlet Speedster, is more than just a superhero - he's a blur of lightning-fast fun! With his superhuman speed and lightning reflexes, Flash zips through Central City faster than you can say "Speed Force." Whether he's saving the day from supervillains or just enjoying a leisurely run, Flash brings the thrill of adventure wherever he goes.</p>
            <p style="font-style: italic; color: #666;">Fun Fact: Flash once accidentally ran into the future and got back before he even left, which made scheduling his appointments quite challenging!</p>
        </section>
        <section id="services">
            <h2>Services</h2>
            <p>Welcome, <strong><?php echo $_SESSION["username"]; ?></strong>!</p>
            <p>Rent Flash for your next event!</p>
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
                        $sql = "INSERT INTO flash (username, date) VALUES ('$username', '$date')";
                        
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
        
            <h3 style="color: yellow;">Special offer: Let Flash get the job done in less than a minute for only $300! Other superheroes charge $150!</h3>
            <h3 style="color: yellow;">Warning: Speed Force may cause unexpected side effects, like time travel or spontaneous dance parties!</h3>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Email: speed@flashadventures.com</p>
            <p>Phone: Sorry, no number for privacy. Just leave a lightning bolt-shaped message!</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Flash Adventures. All rights reserved, unless we run too fast and break the timeline!</p>
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
