
<?php
require 'config.php';

$errorMsg = '';

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($name) || empty($surname) || empty($email) || empty($password)) {
        $errorMsg = "All fields are required. Please fill out the entire form.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMsg = "Invalid email address. Please enter a valid email.";
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO users (id, name, surname, email, password, user_type) VALUES (NULL, :name, :surname, :email, :password, :user_type)");

            $user_type = "user";

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':user_type', $user_type);

            $stmt->execute();

            header("Location: login-signin.php");
        } catch (PDOException $e) {
            $errorMsg = $e->getMessage();
        }
    }
}
