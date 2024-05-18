<html>
    <body>

   <link rel="stylesheet" href="../../static/booking/style.css">
<?php
    // Start session to access session data
    session_start();

    // Check if session variable for username is set
    if(isset($_SESSION["username"])) {
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "heros_login";

        // Create connection
        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Query to fetch dates for all superheroes based on username
        $sql_date = "SELECT 'Joker' AS superhero, date FROM joker WHERE username='{$_SESSION["username"]}'
                     UNION
                     SELECT 'Batman' AS superhero, date FROM batman WHERE username='{$_SESSION["username"]}'
                     UNION
                     SELECT 'Flash' AS superhero, date FROM flash WHERE username='{$_SESSION["username"]}'
                     UNION
                     SELECT 'Deadpool' AS superhero, date FROM deadpool WHERE username='{$_SESSION["username"]}'";
        $result_date = mysqli_query($conn, $sql_date);

        if (mysqli_num_rows($result_date) > 0) {
            echo "<table>";
            echo "<tr><th>Username</th><th>Superhero</th><th>Date</th></tr>";
            while ($row = mysqli_fetch_assoc($result_date)) {
                echo "<tr><td>" . $_SESSION["username"] . "</td><td>" . $row["superhero"] . "</td><td>" . $row["date"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No bookings found for " . $_SESSION["username"];
        }

        // Close connection
        mysqli_close($conn);
    } else {
        echo "No user logged in.";
    }
?>
 </body>
</html>