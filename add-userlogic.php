<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($surname) && !empty($email) && !empty($password)) {
        try {
            $sql = "INSERT INTO users (name, surname, email, password, user_type) VALUES (:name, :surname, :email, :password, 'user')";
            $insertSql = $conn->prepare($sql);

            $insertSql->bindParam(':name', $name);
            $insertSql->bindParam(':surname', $surname);
            $insertSql->bindParam(':email', $email);
            $insertSql->bindParam(':password', $password);

            $insertSql->execute();

            header("Location: admin-dashboard.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>