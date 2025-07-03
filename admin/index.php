<?php
// admin/index.php

// --- Database Configuration ---
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'kidsoorja';

$submissions = [];
$errorMessage = '';

// --- Establish Database Connection ---
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    $errorMessage = "Database connection failed: " . $conn->connect_error;
    error_log($errorMessage);
} else {
    // --- Fetch Data from MySQL ---
    try {
        $sql = "SELECT name, address, phone, kid_age, submission_time FROM contact_submissions ORDER BY submission_time DESC";
        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $submissions[] = $row;
            }
            $result->free(); // Free result set
        } else {
            $errorMessage = "Error fetching data: " . $conn->error;
            error_log($errorMessage);
        }
    } catch (Exception $e) {
        $errorMessage = "An unexpected error occurred: " . $e->getMessage();
        error_log($errorMessage);
    } finally {
        $conn->close(); // Close connection
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Kids Oorja</title>
    <link rel="stylesheet" href="admin.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="admin-container">
        <h1 class="admin-main-heading">Admin Panel</h1>
        <p class="admin-user-id">
            <!-- User ID is not directly relevant here as it's a direct MySQL connection -->
            Currently viewing contact submissions.
        </p>

        <div class="data-table-container">
            <?php if (!empty($errorMessage)): ?>
                <p class="loading-message" style="color: red;"><?php echo htmlspecialchars($errorMessage); ?></p>
            <?php elseif (empty($submissions)): ?>
                <p id="noDataMessage" class="no-data-message">No contact submissions yet.</p>
            <?php else: ?>
                <p id="loadingMessage" class="loading-message" style="display: none;">Loading contact submissions...</p>
                <table id="contactSubmissionsTable" class="data-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Kid's Age</th>
                            <th>Submitted On</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($submissions as $submission): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($submission['name']); ?></td>
                                <td><?php echo htmlspecialchars($submission['address']); ?></td>
                                <td><?php echo htmlspecialchars($submission['phone']); ?></td>
                                <td><?php echo htmlspecialchars($submission['kid_age']); ?></td>
                                <td><?php echo htmlspecialchars($submission['submission_time']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
