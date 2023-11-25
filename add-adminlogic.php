<?php
session_start();
require 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        $stmt = $conn->prepare("INSERT INTO users (name, surname, email,password) VALUES (:name, :surname,:email,:password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        header("Location: admin-dashboard.php");
    } catch (PDOException $e) {
        echo $e;
    }
}
