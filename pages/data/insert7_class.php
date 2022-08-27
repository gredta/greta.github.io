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
$sql = "INSERT INTO pets (Name, `Pet Name`, Animal, `Adoption Place`)
VALUES ('$_POST[Name]','$_POST[Pet_Name]','$_POST[Animal]', '$_POST[Adoption_Place]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
