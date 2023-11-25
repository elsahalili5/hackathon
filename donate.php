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
    <link rel="stylesheet" href="styles/donate.css">
</head>
<div class="container2">
    <div class="left-container">

    </div>

    <div class="right-container">
        <img src="" alt="">
        <DIV class="card-div">
            <div class="card-image">
                <img width="200px" src="https://static.vecteezy.com/system/resources/previews/008/490/560/original/credit-card-transparent-background-png.png" alt="">
            </div>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CARD NUMBER</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">NAME</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="date" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">MM/YY</label>
                </div>
                <button type="submit" class="btn btn-primary">PAY NOW</button>
            </form>
        </DIV>
        <div>
            <form class="second-form">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" value="<?php echo $user['name'] ?>">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">CAUSE</label>
                    <select name="cause" id="">
                        <option value="">Select a cause</option>
                        <?php foreach ($causes as $cause) : ?>
                            <option value="<?php echo $cause['id']; ?>"><?php echo $cause['name']; ?></option>
                        <?php endforeach; ?>
                    </select>

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

<body>

</body>

</html>