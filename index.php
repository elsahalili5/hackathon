<?php require('./disable-warnings.php'); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO FUND | Homepage</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="icon" type="image/x-icon" href="./images/logo-dark.png">
</head>

<body class="body-home">
    <div class="section-1">
        <div class="video">
            <video autoplay loop muted class="backgroundvideo">
                <source src=".\videos\video (2160p).mp4" type="video/mp4">
            </video>
        </div>

        <div class="login-wrapper">
            <div>
                <?php if ($_SESSION['name']) { ?>
                    <p class="login-text welcome-text"><?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']; ?></p>

                    <?php if (isset($_SESSION['user_type'])) {
                        if ($_SESSION['user_type'] === 'admin') { ?>
                            <div class="admin-dashboard-btn">
                                <a href="admin-dashboard.php">Admin's Dashboard</a>
                            </div>
                    <?php } // No need for an else condition here
                    }  ?>
                    <a class="logout-btn" href="./logout.php">Logout</a>
                <?php } else { ?>
                    <a class="login-text" href="login-signin.php">Login or Register</a>
                <?php } ?>

            </div>
        </div>

        <div class="section-1-text">
            <h5 class="title">ECO FUND</h5>

            <div class="navbar">
                <a href="about.php">OUR MISSION</a>
                <a href="donations.php">DONATIONS</a>
                <?php if ($_SESSION['user_type'] === 'user') { ?>
                    <div class="dropdown">
                        <a href="donate.php">DONATE</a>
                    </div>
                <?php }  ?>
                <?php if ($_SESSION['user_type'] === 'admin') { ?>
                    <div class="dropdown">
                        <a href="causes.php">CAUSES</a>
                    </div>
                <?php }  ?>
                <?php if ($_SESSION['user_type'] === 'user') { ?>
                    <div class="dropdown">
                        <a href="contact.php">CONTACT</a>
                    </div>
                <?php }  ?>

            </div>
        </div>


        <div class="mission">
            <p>
                Transform clicks into positive change. Our app simplifies supporting eco-friendly initiatives, preserving oceans, mountains, and vital environments.
            </p>
            <p>
                Join us for a sustainable future
            </p>
            <p>One click, endless impact.</p>

            <?php if ($_SESSION['name']) { ?>
                <div class="user-dashboard-btn">
                    <a href="donate.php">DONATE</a>
                </div>
            <?php } else { ?>
                <div class="user-dashboard-btn">
                    <a href="login-signin.php">JOIN</a>
                </div>
            <?php } ?>

        </div>
    </div>
    <footer>
        <p>Copyright © 2023 Anjesa & Elsa - All Rights Reserved</p>
    </footer>
</body>

</html>
<script src="js/main-page.js"></script>