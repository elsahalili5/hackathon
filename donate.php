<?php require('is-private-page.php') ?>

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
    <title>ECO FUND | Donate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/donate.css">
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
            <a href="./donate.php" class="active">Donate</a>
            <?php if ($_SESSION['user_type'] === 'admin') { ?>
                <a href="./causes.php">Causes</a>
            <?php }  ?>
        </nav>
    </header>


    <div class="donate-wrapper">
        <div class="donate-left">
            <h1>
                Thank you for choosing to make a difference with <strong>ECO FUND</strong>!</h1>
            <h6> Your decision to contribute is not just a donation; it's a powerful statement of commitment to a sustainable future.</h6>
            <h6> As you embark on this journey with us, your support is a catalyst for positive change, helping preserve oceans, mountains, and vital environments. Your click today is an investment in a greener, healthier tomorrow. We are grateful for your generosity and dedication to creating a lasting impact. Together, let's shape a world where every act of kindness contributes to the well-being of our planet. Thank you for being a force for good
            </h6>
            <a href="donations.php" class="btn btn-success">See Donations</a>
        </div>
        <div class="donate-right">

            <form class="second-form" action="donate-logic.php" method="POST">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Personal Details</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- first name input-->
                                    <div class="form-group">
                                        <label for="firstname" class="control-label form-label">First Name</label>
                                        <div class="">
                                            <input autofocus required value="<?php echo $_SESSION['name'] ?>" id="first-name" name="firstname" type="text" autocomplete="first-name" placeholder="first ame" class="form-control">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname" class="control-label form-label">Last Name</label>
                                        <div class="">
                                            <input value="<?php echo $_SESSION['surname'] ?>" id="last-name" name="lastname" type="text" autocomplete="last-name" placeholder="last name" class="form-control">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label required for="email" class="control-label form-label">Email</label>
                                    <div>
                                        <input value="<?php echo $_SESSION['email'] ?>" id="last-name" name="email" type="email" autocomplete="last-name" placeholder="email" class="form-control">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label for="exampleInputPassword1" class="form-label">The cause for your donation</label>
                                    <select required name="cause" id="" class="form-control">
                                        <option value="">Select a cause</option>
                                        <?php foreach ($causes as $cause) : ?>
                                            <option value="<?php echo $cause['id']; ?>"><?php echo $cause['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label for="donateReason" class="control-label form-label">Reason for donation</label>
                                    <div class="">
                                        <textarea style="resize: none;" rows="6" value="<?php echo $_SESSION['email'] ?>" id="last-name" name="donateReason" class="form-control "></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Donation Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="amount" class="form-label">Amount</label>
                                    <div class="input-group">
                                        <input required type="text" class="form-control" name="amount" placeholder="$50.00" required />
                                        <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <label for="frequency" class="form-label">Frequency</label>
                                <select required name="frequency" id="frequency" class="form-control">

                                    <option value="once">Once</option>

                                    <option value="weekly">Weekly</option>
                                    <option value="Fortnightly">Fortnightly</option>
                                    <option value="Monthly">Monthly</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Payment Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="form-label" for="cardNumber">CARD NUMBER</label>
                                <div class="input-group">
                                    <input required type="text" class="form-control" name="cardNumber" placeholder="Valid Card Number" required data-stripe="number" />
                                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="expMonth">EXPIRATION DATE</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                            <input required type="text" class="form-control" name="expMonth" placeholder="MM" required data-stripe="exp_month" />
                                        </div>
                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                            <input required type="text" class="form-control" name="expYear" placeholder="YY" required data-stripe="exp_year" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label class="form-label" for="cvCode">CV CODE</label>
                                    <input type="password" required class="form-control" name="cvCode" placeholder="CV" required data-stripe="cvc" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <input class="btn btn-success btn-lg btn-block mt-4" type="submit" name="submit" value="Donate Now">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <footer>
        <p>Copyright © 2023 Anjesa & Elsa - All Rights Reserved</p>
    </footer>
</body>

</html>