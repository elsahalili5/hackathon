<?php require('page-only-for-admin.php') ?>
<?php require('is-private-page.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="addadminlogic.php" method="POST">

                <h1>Add New User</h1>

                <input type="text" name="name" placeholder="Name" required />
                <input type="text" name="surname" placeholder="Surname" required />
                <input type="text" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />

                <button class="button" type="submit" name="submit">Add Admin</button>
            </form>
        </div>
    </div>
</body>

</html>