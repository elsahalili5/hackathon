<?php

session_start();
require 'config.php';

    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE name=:name");
    $stmt->bindParam(":name", $name);
    $stmt->execute();
    $user = $stmt->fetch();


try {
    $stmt = $conn->query("SELECT * FROM cause");
    $causes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/donate.css">
    <link rel="stylesheet" href="styles/header.css">
</head>

<body>

    <div>
        <header>
            <div class="logo">
                <h1>ECO FUND</h1>
            </div>
            <nav class="navbar">
                <a href="./index.php">Home</a>
                <a href="./causes.php">Causes</a>
            </nav>
        </header>
    </div>
    <div class="container2">
        <div class="left-container">

        </div>

        <div class="right-container">
            <div>
                <form class="second-form" action="donate-logic.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" value="<?php echo $user['name'] ?>">Your Name</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">The cause for your donation</label>
                        <select name="cause" id="">
                            <option value="">Select a cause</option>
                            <?php foreach ($causes as $cause) : ?>
                                <option value="<?php echo $cause['id']; ?>"><?php echo $cause['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Donation Amount</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <label for="exampleInputEmail1" class="form-label">REASON FOR DONATING</label>
                        <textarea name="donate-reason" id="" cols="30" rows="10" required></textarea>

                    </div>
                    <button type="submit" class="btn btn-primary">DONATE</button>
                </form>
            </div>

        </div>
    </div>


</body>

</html>