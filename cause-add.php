<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    if (isset($_POST['cause_name']) && !empty($_POST['cause_name'])) {
        $causeName = $_POST['cause_name'];

        try {
            $stmt = $conn->prepare("INSERT INTO cause (name) VALUES (:name)");
            $stmt->bindParam(':name', $causeName);
            $stmt->execute();
            header("Location: causes.php"); // Change 'causes.php' to your desired page
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Cause name cannot be empty.";
    }
} else {
    echo "Invalid request.";
}

$causesTotals = []; // Initialize an array to store the total amount collected for each cause

try {
    $stmt = $conn->query("SELECT cause, SUM(amount) AS total_amount FROM donations GROUP BY cause");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $causesTotals[$row['cause']] = $row['total_amount'];
    }
} catch (PDOException $e) {
    echo $e;
    echo 'error';
}
