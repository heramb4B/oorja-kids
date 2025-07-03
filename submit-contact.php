<?php
// submit_contact.php

// --- Database Configuration ---
$dbHost = 'localhost'; // Your database host (usually 'localhost' for local dev)
$dbUser = 'root';      // Your MySQL username (e.g., 'root' for XAMPP/WAMP)
$dbPass = '';          // Your MySQL password (e.g., empty for XAMPP/WAMP root)
$dbName = 'kidsoorja'; // The database you created

// --- Establish Database Connection ---
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    header('Location: contact.php?status=error'); // Redirect to contact.php
    exit();
}

// --- Process Form Submission ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $kidAge = $_POST['kid_age'] ?? '';

    // Basic validation (you can add more robust validation here)
    if (empty($name) || empty($address) || empty($phone) || empty($kidAge)) {
        header('Location: contact.php?status=error');
        exit();
    }

    // Prepare an SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contact_submissions (name, address, phone, kid_age) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        error_log("Failed to prepare statement: " . $conn->error);
        header('Location: contact.php?status=error');
        exit();
    }

    // Bind parameters and execute
    $stmt->bind_param("sssi", $name, $address, $phone, $kidAge); // s=string, i=integer
    
    if ($stmt->execute()) {
        // Success
        header('Location: contact.php?status=success');
        exit();
    } else {
        // Error
        error_log("Failed to execute statement: " . $stmt->error);
        header('Location: contact.php?status=error');
        exit();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Not a POST request, redirect to contact page
    header('Location: contact.php');
    exit();
}
?>
