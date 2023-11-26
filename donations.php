<?php
session_start();
require 'config.php';

try {
    $stmt = $conn->query("SELECT * FROM donations");
    $stmt->execute();
    $donations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO FUND | Donations</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/admin-dashboard.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/donations.css">


    <link rel="icon" type="image/x-icon" href="./images/logo-dark.png">


</head>

<body>
    <header>
        <div class="logo">
            <img src="./images/logo.png" alt="EcoFund logo">
        </div>

        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="./about.php">Our Mission</a>
            <?php if ($_SESSION['user_type'] === 'user') { ?>
                <a href="./donate.php">Donate</a>
            <?php }  ?>
            <a class="active" href="./donations.php">Donations</a>

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

    <div class="donations-container">
        <div class="users-table">
            <div class="table-head">
                <div>
                    <h2>All Donations</h2>
                </div>
                <div>
                    <a href="donate.php" class="btn btn-secondary d-flex align-items-center"> <span class="mr-2">Donate</span> <ion-icon name="arrow-forward-outline"></ion-icon> </a>
                </div>
            </div>

            <div class="cards">
                <?php if (isset($donations) && !empty($donations)) : ?>
                    <?php foreach ($donations as $donation) : ?>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-uppercase "><?= $donation['first_name'] ?> <?= $donation['last_name'] ?></h4>
                            </div>
                            <div class="card-body">
                                <h6 class="card-text"><?= $donation['email'] ?></h6>
                                <p class="card-text text-truncate d-inline-block"><?= $donation['cause'] ?></h6>
                            </div>
                            <div class="card-footer">
                                <p class="text-success mb-0 pb-0 font-weight-bold ">
                                    <?= $donation['amount'] ?> $
                                </p>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php else : ?>
                    <div>
                        <p>No causes found</p>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <footer>
        <p>Copyright © 2023 Anjesa & Elsa & Elmedina - All Rights Reserved</p>
    </footer>
</body>

</html>