<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="styles/about.css">


</head>


<body>
    <div class="section-1">
        <div class="video">
            <video autoplay loop muted class="backgroundvideo">
                <source src="videos/video1.mp4" type="video/mp4">
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
            <h6 class="title">TREE BLOOM</h6>

            <div class="navbar">
                <a href="#">HELLO</a>
                <div class="dropdown">
                    <a href="#">HELLO</a>
                </div>
            </div>
        </div>

        <?php if ($_SESSION['user_type'] === 'admin') { ?>
            <div class="admin-dashboard-btn">
                <a href="admin-dashboard.php">Admin's Dashboard</a>
            </div>
        <?php }  ?>

    </div>

    <main>
    </main>

    <footer>
        <p>Copyright Anjesa & Elsa</p>
    </footer>
</body>


</html>