<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signed Up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="d-flex justify-content-center align-items-center mt-4" style="height: 75vh;">
        <div class="col-3">
            <h1>Sign up</h1>
                <div class="d-flex gap-4">
                    <div>
                        <h4 class="mt-4">Name</h4>
                        <h4 class="mt-4">Email Address</h4>
                        <h4 class="mt-4">Contact Number</h4>
                        <h4 class="mt-4">Location</h4>
                        <h4 class="mt-4">Gender</h4>
                    </div>
                    <div>
                        <h4 class="mt-4">: <?= $_POST['name'] ?></h4>
                        <h4 class="mt-4">: <?= $_POST['email'] ?></h4>
                        <h4 class="mt-4">: <?= $_POST['contact-number'] ?></h4>
                        <h4 class="mt-4">: <?= $_POST['location']; ?></h4>
                        <h4 class="mt-4">: <?= $_POST['gender']; ?></h4>
                    </div>
                </div>
            </div>
        
        <div>
            <img src="images/computer.webp">
        </div>

    </div>

    <div class="d-flex justify-content-center">
        <h1>Thank you for signing up <?= $_POST['name']; ?>!</h1>
    </div>

    <script src="https://kit.fontawesome.com/309041c954.js" crossorigin="anonymous"></script>  
</body>
</html>

<?php

?>

