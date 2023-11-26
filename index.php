<?php require('./disable-warnings.php'); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header.css">

</head>

<body>

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

            </div>
        </div>

        <?php if (isset($_SESSION['user_type'])) {
            if ($_SESSION['user_type'] === 'admin') { ?>
                <div class="admin-dashboard-btn">
                    <a href="admin-dashboard.php">Admin's Dashboard</a>
                </div>
            <?php } // No need for an else condition here
        } else { ?>
            <div class="user-dashboard-btn">
                <a href="login-signin.php">Sign up to donate</a>
            </div>
        <?php } ?>





    </div>

    <main>
    </main>

    <footer>
        <p>Copyright Anjesa & Elsa</p>
    </footer>
</body>

</html>
<script src="js/main-page.js"></script>