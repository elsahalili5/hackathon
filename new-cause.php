<?php require('page-only-for-admin.php') ?>
<?php require('is-private-page.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECO FUND | Add New Cause</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/general.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/new-cause.css">
  <link rel="icon" type="image/x-icon" href="./images/logo-dark.png">

</head>

<body class="new-cause">
  <header>
    <div class="logo">
      <img src="./images/logo.png" alt="EcoFund logo">
    </div>

    <nav class="navbar">
      <a href="./index.php">Home</a>
      <a href="./about.php">Our Mission</a>
      <a href="./donate.php">Donate</a>
      <a href="./causes.php" class="active">Causes</a>
    </nav>
  </header>

  <main class="form-signin">
    <form action="cause-add.php" method="POST">
      <h3 class="mb-3">Add a New Cause</h3>
      <div class="form-floating w-100 m-auto mb-4">
        <input class="form-control" type="text" name="cause_name" id="name" placeholder="New Cause" required autofocus>
        <label class="sr-only" for="name">Name</label>
      </div>
      <button class="btn btn-success " type="submit" name="submit">Save</button>
      <a href="./causes.php" class="btn btn-danger  ml-2">Cancel</a>
    </form>
  </main>

  <footer>
    <p>Copyright © 2023 Anjesa & Elsa - All Rights Reserved</p>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>