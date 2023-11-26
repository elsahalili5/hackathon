<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add new user</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles/general.css" rel="stylesheet">
  <link href="styles/add-user.css" rel="stylesheet">

</head>
<body>
  <div class="container">
    <div class="form-container">
      <h2>New User</h2>
      <form action="add-userlogic.php" method="post">
        <div class="form-group">
          <label for="name">First Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Last Name:</label>
          <input type="text" class="form-control" id="surname" name="surname" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary" name="submit" id="submit" >Register</button>
        </div>
      </form>
    </div>
  </div>

  <footer>
        <p>Copyright © 2023 Anjesa & Elsa & Elmedina - All Rights Reserved</p>
    </footer>
</body>
</html>

