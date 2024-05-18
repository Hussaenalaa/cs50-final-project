<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a Superhero</title>
    <link rel="stylesheet" href="../../static/wish_list/wishlist.css">
</head>
<body>

    <header>
        <h1>Rent a Superhero</h1>
        <nav>
            <ul>
                <li><a href="../../templates/home/homepage.html">About</a></li>
                <li><a href="../../templates/home/homepage.html">Superheroes</a></li>
                <li><a href="../../templates/home/homepage.html">Booking</a></li>
                <li><a href="../../templates/home/homepage.html">Contact</a></li>
                <li><a href="../../templates/home/homepage.html">Wishlist</a></li> 
            </ul>
        </nav>
    </header>

    <main>
        <section id="wishlist">
            <h2>My Superhero Wishlist</h2>
            <ul id="wishlist-items">
                <!-- Wishlist items will be manually added here -->
            </ul>
            <form id="wishlist-form" action="" method="post">
                <label for="name">Name Of Suber Hero:</label>
                <input type="text" id="name" name="name" required>
                <label for="number">Number To Connect:</label>
                <input type="number" id="number" name="number" required>
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required><br><br>
                <button type="submit" name="submit">Add to Wishlist</button>
            </form>
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
    $name = $_POST['name'];
    $number = $_POST['number'];
    $image = $_POST['image'];

    $sql = "INSERT INTO wish (name, number, image) VALUES ('$name', '$number', '$image')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='success-message'>added successful!</div>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

            
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Rent a Superhero. All rights reserved.</p>
    </footer>
</body>
</html>
