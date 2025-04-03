<?php
$host = "localhost"; 
$user = "root"; // Change if you have a different MySQL username
$pass = ""; // Add your MySQL password if needed
$dbname = "ramen_shop";

// Connect to MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch menu items
$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);

$menu = [];
while ($row = $result->fetch_assoc()) {
    $menu[] = $row;
}

// Return data as JSON
echo json_encode($menu);

$conn->close();
?>
