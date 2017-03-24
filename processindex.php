<?php

// Retrieve POST data 
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];

$color = $_POST['colordropdown'];

$pet1 = $_POST['pet1'];
$pet2 = $_POST['pet2'];
$pet3 = $_POST['pet3'];
$pet4 = $_POST['pet4'];
$pet5 = $_POST['pet5'];

$topping1 = $_POST['topping1'];
$topping2 = $_POST['topping2'];
$topping3 = $_POST['topping3'];
$topping4 = $_POST['topping4'];

$textarea = $_POST['textarea1'];

// Database information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interview";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Build SQL statement
$sql = "INSERT INTO userinfo
VALUES ('" . $fname . "','" . $lname . "','" . $color . "','" . $pet1 . "','" . $pet2 . "','" 
		   . $pet3 . "','" . $pet4 . "','" . $pet5 . "','" . $topping1 . "','" . $topping2 . "','"
		   . $topping3 . "','" . $topping4 . "','" . $textarea . "')";


// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();

?>