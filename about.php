<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO FUND | Our Mission</title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="icon" type="image/x-icon" href="./images/logo-dark.png">

</head>

<body class="about-body">
    <div class="about-container">
        <header>
            <div class="logo">
                <img src="./images/logo.png" alt="EcoFund logo">
            </div>

            <nav class="navbar">
                <a href="./index.php">Home</a>
                <a class="active" href="./about.php">Our Mission</a>
                <?php if ($_SESSION['user_type'] === 'user') { ?>
                    <a href="./donate.php">Donate</a>
                <?php }  ?>
                <a href="./donations.php">Donations</a>

                <?php if ($_SESSION['user_type'] === 'admin') { ?>
                    <a href="./causes.php">Causes</a>
                <?php }  ?>
                <?php if ($_SESSION['user_type'] === 'user') { ?>
                    <a href="./contact.php">Contact</a>
                <?php }  ?>
                <?php if ($_SESSION['user_type'] === 'admin') { ?>
                    <a href="./contact.php">Messages</a>
                <?php }  ?>

            </nav>
        </header>


        <div class="about-content">
            <div class="about-video">
                <div class="video">
                    <video autoplay loop muted class="backgroundvideo">
                        <source src=".\videos\about-video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="about-text">
                <h2>Our mission</h2>
                <p>Welcome to our nature-saving initiative! At Echo Fund, we're on a mission to protect and preserve our planet's precious ecosystems through the transformative power of technology. </p>
                <p>Your donation directly fuels our innovative projects. Join us in making a real impact – every contribution brings us closer to a future where technology not only coexists with nature but actively contributes to its flourishing. Together, let's ensure a greener, more sustainable world for generations to come. Donate today and be a part of the movement to save nature through technology.</p>
                <div class="donate-btn">
                    <a href="donate.php">DONATE</a>
                </div>
            </div>
        </div>

        <footer>
            <p>Copyright © 2023 Anjesa & Elsa - All Rights Reserved</p>
        </footer>
</body>

</html>