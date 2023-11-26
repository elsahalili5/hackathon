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
