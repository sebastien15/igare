<?php
include('../config/database.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to execute a prepared statement
function executeStatement($stmt) {
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result;
}

// CRUD operations

// Create
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $national_id = $_POST['national_id'];
    $phone_number = $_POST['phone_number'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $cell = $_POST['cell'];
    $village = $_POST['village'];
    $actions = $_POST['actions'];

    $stmt = $conn->prepare("INSERT INTO Customers (name, national_id, phone_number, district, sector, cell, village, actions) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $national_id, $phone_number, $district, $sector, $cell, $village, $actions);

    $result = executeStatement($stmt);

    if ($result) {
        header("Location: customers.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Read
function getAllCustomers() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Customers");
    $result = executeStatement($stmt);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $national_id = $_POST['national_id'];
    $phone_number = $_POST['phone_number'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $cell = $_POST['cell'];
    $village = $_POST['village'];
    $actions = $_POST['actions'];

    $stmt = $conn->prepare("UPDATE Customers SET name=?, national_id=?, phone_number=?, district=?, sector=?, cell=?, village=?, actions=? WHERE id=?");
    $stmt->bind_param("ssssssssi", $name, $national_id, $phone_number, $district, $sector, $cell, $village, $actions, $id);

    $result = executeStatement($stmt);

    if ($result) {
        header("Location: customers.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $stmt = $conn->prepare("DELETE FROM Customers WHERE id=?");
    $stmt->bind_param("i", $id);

    $result = executeStatement($stmt);

    if ($result) {
        header("Location: customers.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Fetch all customers
$customers = getAllCustomers();

// Close the database connection
$conn->close();
?>
