<?php
include('../config/databse.php');

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
    $number = $_POST['number'];
    $name = $_POST['name'];
    $bike_id = $_POST['bike_id'];
    $status = $_POST['status'];
    $owner = $_POST['owner'];
    $agent_username = $_POST['agent_username'];
    $agent_id = $_POST['agent_id'];
    $approved_motif = $_POST['approved_motif'];
    $use_type = $_POST['use_type'];
    $actions = $_POST['actions'];

    $stmt = $conn->prepare("INSERT INTO Bikes (number, name, bike_id, status, owner, agent_username, agent_id, approved_motif, use_type, actions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisssssss", $number, $name, $bike_id, $status, $owner, $agent_username, $agent_id, $approved_motif, $use_type, $actions);

    $result = executeStatement($stmt);

    if ($result) {
        header("Location: bikes.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Read
function getAllBikes() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Bikes");
    $result = executeStatement($stmt);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $number = $_POST['number'];
    $name = $_POST['name'];
    $bike_id = $_POST['bike_id'];
    $status = $_POST['status'];
    $owner = $_POST['owner'];
    $agent_username = $_POST['agent_username'];
    $agent_id = $_POST['agent_id'];
    $approved_motif = $_POST['approved_motif'];
    $use_type = $_POST['use_type'];
    $actions = $_POST['actions'];

    $stmt = $conn->prepare("UPDATE Bikes SET number=?, name=?, bike_id=?, status=?, owner=?, agent_username=?, agent_id=?, approved_motif=?, use_type=?, actions=? WHERE id=?");
    $stmt->bind_param("ssisssssssi", $number, $name, $bike_id, $status, $owner, $agent_username, $agent_id, $approved_motif, $use_type, $actions, $id);

    $result = executeStatement($stmt);

    if ($result) {
        header("Location: bikes.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $stmt = $conn->prepare("DELETE FROM Bikes WHERE id=?");
    $stmt->bind_param("i", $id);

    $result = executeStatement($stmt);

    if ($result) {
        header("Location: bikes.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Fetch all bikes
$bikes = getAllBikes();

// Close the database connection
$conn->close();
?>
