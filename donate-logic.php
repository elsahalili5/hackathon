<?php
session_start();

require 'config.php';


if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $cause = $_POST['cause'];
    $donate_reason = $_POST['donateReason'];
    $amount = $_POST['amount'];
    $frequency = $_POST['frequency'];
    $card_number = $_POST['cardNumber'];
    $exp_month = $_POST['expMonth'];
    $exp_year = $_POST['expYear'];
    $cvc_code = $_POST['cvCode'];

    echo $cvc_code;

    try {
        $stmt = $conn->prepare("INSERT INTO donations (id, first_name, last_name, email, cause, donation_reason, amount, frequency, card_number, exp_date, cvc_code) VALUES (NULL, :first_name, :last_name, :email, :cause, :donation_reason, :amount, :frequency, :card_number, :exp_date, :cvc_code)");


        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cause', $cause);
        $stmt->bindParam(':donation_reason', $donation_reason);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':frequency', $frequency);
        $stmt->bindParam(':card_number', $card_number);
        $stmt->bindParam(':exp_date', $exp_month . '/' . $exp_year);
        $stmt->bindParam(':cvc_code', $cvc_code);

        $stmt->execute();

        // header("Location: thank-you.php");
    } catch (PDOException $e) {
        echo $e;
        echo 'error';
    }
}
