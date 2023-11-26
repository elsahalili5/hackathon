<?php require('page-only-for-admin.php') ?>
<?php require('is-private-page.php') ?>

<?php
session_start();
require 'config.php';

try {
    $stmt = $conn->query("SELECT * FROM cause");
    $stmt->execute();
    $causes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Causes's Dashboard</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/admin-dashboard.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">

</head>

<body>
    <header>
        <div class="logo">
            <img src="./images/logo.png" alt="EcoFund logo">
        </div>

        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="./about.php">Our Mission</a>
            <a href="./donate.php">Donate</a>
            <?php if ($_SESSION['user_type'] === 'admin') { ?>
                <a href="./causes.php" class="active">Causes</a>
            <?php }  ?>
        </nav>
    </header>

    <div class="container">
        <div class="users-table">
            <div class="table-head">
                <div>
                    <h2>Causes</h2>
                </div>
                <div>
                    <a href="new-cause.php" class="btn btn-secondary"><ion-icon name="add-circle-outline"></ion-icon> <span>Add New Cause</span></a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($causes) && !empty($causes)) : ?>
                        <?php foreach ($causes as $cause) : ?>
                            <tr>
                                <th scope="row"><?= $cause['id'] ?></th>
                                <td><?= $cause['name'] ?></td>
                                <td>
                                    <a class="delete-btn" href="delete-cause.php?id=<?= $cause['id'] ?>"><ion-icon name="trash-outline"></ion-icon></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3">No causes found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p>Copyright © 2023 Anjesa & Elsa - All Rights Reserved</p>
    </footer>
</body>

</html>