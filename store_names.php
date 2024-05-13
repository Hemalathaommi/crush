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
}

// Get form data
$userName = $_POST['userName'];
$crushName = $_POST['crushName'];
$matchPercentage = $_POST['matchPercentage'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO crush_matches (userName, crushName, matchPercentage) 
        VALUES ('$userName', '$crushName', '$matchPercentage')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>

