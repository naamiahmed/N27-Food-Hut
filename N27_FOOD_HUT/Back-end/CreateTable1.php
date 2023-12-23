<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "n27_food_hut";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a table named "Table_Reservation"
$tableName = "Payment_details";
$sql = "CREATE TABLE $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    visa_card VARCHAR(30) NOT NULL,
    Master_card VARCHAR(50),
    Expiry_Date DATE,
    CVV TIME,
    count VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
