<?php
session_start();
if (!$_SESSION['name']) {
    header("Location: login-signin.php");
}
