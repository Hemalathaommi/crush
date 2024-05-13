<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "hema123";
$dbname = "quiz_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully"; // Display a message if connection is successful
}

// Prepare and execute SQL query to retrieve data from the table
$sql = "SELECT * FROM crush_matches";
$result = $conn->query($sql);

// Display retrieved data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row["userName"] . "<br>";
        echo "Crush: " . $row["crushName"] . "<br>";
        echo "Match Percentage: " . $row["matchPercentage"] . "%<br>";
        echo "<hr>";
    }
} else {
    echo "No data found.";
}

// Close database connection
$conn->close();
?>
