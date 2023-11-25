<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Cause</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        } 

        body {
            display: flex; 
            background-color: dark;
            align-items: center;
            justify-content: center;
        }

        .form-signin {
            max-width: 400px;
            width: 100%;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body class="text-center">

    <main class="form-signin">
  <form action="cause-add.php" method="POST" class="my-3">
  <h3 class="fst-italic text-light border border-success border-4 rounded bg-success mb-3 p-3">Add a New Cause</h3>
    <div class="form-floating w-100 m-auto mb-3">
      <input class="form-control" type="text" name="cause_name" id="name" placeholder="New Cause" required autofocus>
      <label class="sr-only" for="name">Name of your cause</label>
    </div>
      </br>
    <button class="btn btn-success w-25 py-2" type="submit" name="submit">Add New Cause</button>
  </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>