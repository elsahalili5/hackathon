<?php require('page-only-for-admin.php') ?>
<?php require('is-private-page.php') ?>

<?php
session_start();
require 'config.php';

try {
    $stmt = $conn->query("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Dashboard</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/admin-dashboard.css">
    <link rel="stylesheet" href="styles/general.css">
</head>

<body>
    <div class="container">
        <div class="users-table">
            <div class="table-head">
                <div>
                    <h2>User Management</h2>
                </div>
                <div>
                    <a href="add-admin.php" class="btn btn-secondary"><ion-icon name="add-circle-outline"></ion-icon> <span>Add New User</span></a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($users) && !empty($users)) : ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <th scope="row"><?= $user['id'] ?></th>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['surname'] ?></td>
                                <td><?= $user['user_type'] ?></td>
                                <td><a href="edit.php?id=<?= $user['id'] ?>"><ion-icon class="edit-btn" name="create-outline"></ion-icon></a> | <a class="delete-btn" href="delete.php?id=<?= $user['id'] ?>"><ion-icon name="trash-outline"></ion-icon></a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5">No users found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>