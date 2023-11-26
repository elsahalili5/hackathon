<?php
session_start();
require 'config.php';

try {
    $stmt = $conn->query("SELECT * FROM contact_messages");
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/contact.css">
  
</head>
<body>


<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="contact-form">
        <?php if ($_SESSION['user_type'] === 'user') { ?>
            <h2 class="text-center mb-5">Get in Touch</h2>
          <form action="add-contact.php" method="post">
          
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" rows="5" name="message" required></textarea>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-lg" name="submit">Send Message</button>
                    </div>
                  </form>
                    <?php }  ?>
         
                <!-- Display previous messages here -->

                <?php if ($_SESSION['user_type'] === 'admin') { ?>
                    <div class="previous-messages mt-5">
                  <h2 class="text-center mb-4">Previously Received Messages</h2>
                    <?php foreach ($contacts as $contact) : ?>
                        <div class="card">
                            <div class="card-header">
                                From: <?= $contact['email'] ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $contact['name'] ?></h5>
                                <p class="card-text"><?= $contact['message'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php }  ?>
                
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>