<?php require('page-only-for-admin.php') ?>
<?php require('is-private-page.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/add-admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>

<body class="bg-green">

    <div class="container">
        <div class="card mx-auto mt-5 bg-light-green">
            <div class="card-header bg-dark-green text-white">
                <h3 class="text-center">Add Admin</h3>
            </div>
            <div class="card-body">
                <form method="post" action="add-adminlogic.php">
                    <div class="form-group">
                        <label for="name" class="text-green">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="surname" class="text-green">Surname:</label>
                        <input type="text" class="form-control" name="surname" id="surname" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-green"> Email:</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="text-green">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Add Admin</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>