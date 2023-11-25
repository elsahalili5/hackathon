<?php
session_start();
require 'config.php';
$id = $_GET["id"];

try {
    $stmt = $conn->prepare("Delete from cause where id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: causes.php");
} catch (PDOException $e) {
    echo $e;
}
