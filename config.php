<?php
$host = "localhost";
$password = "";
$user = "root";
$dbname = "hackathon-project-db";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (Exception $e) {
    echo $e->getMessage();
}
