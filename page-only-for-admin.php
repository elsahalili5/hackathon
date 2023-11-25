<?php
session_start();
if ($_SESSION['user_type'] === 'user') {
    header("Location: index.php");
}
