<?php
session_start();


require 'config.php';

if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch();

        if ($user && $password == $user["password"]) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['user_type'] = $user['user_type'];

            header("Location: index.php");
        } else {
            header("Location: login-signin.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
