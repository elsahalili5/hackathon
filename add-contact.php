<?php
include('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Ensure fields are not empty (you can add more validation as needed)
    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            $sql = "INSERT INTO contact_messages(name, email, message) VALUES (:name, :email, :message)";
            $insertSql = $conn->prepare($sql);

            // Bind parameters
            $insertSql->bindParam(':name', $name);
            $insertSql->bindParam(':email', $email);
            $insertSql->bindParam(':message', $message);

            // Execute query
            $insertSql->execute();

            echo "<script>alert('The message has been added successfully'); window.location.href='contact.php';</script>";
        } catch (PDOException $e) {
            // Handle database errors
            echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
        }
    } else {
        echo "All fields are required"; // Provide validation error message
    }
}
?>
