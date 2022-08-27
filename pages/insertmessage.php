<?php
$servername = "localhost:3308";
$username = "dev02dbuser";
$password = "FM02web2020";
$dbname = "dev02db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// replace sql commands with your own table name and columns + $_POSt ID
$sql = "INSERT INTO contact (Name, Email, Message)
VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Message]')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for contacting me!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>