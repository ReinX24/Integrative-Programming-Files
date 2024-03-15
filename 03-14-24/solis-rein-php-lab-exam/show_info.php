<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Laboratory Exam</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container my-4 col-6">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h1>Reservation Information</h1>
            </div>
            <div class="card-body">
                <h5>First Name:</h5>
                <p><?= $_POST["firstname"]; ?></p>

                <hr>
                
                <h5>Last Name:</h5>
                <p><?= $_POST["lastname"]; ?></p>

                <hr>

                <h5>Address:</h5>
                <p><?= $_POST["address"]; ?></p>

                <hr>

                <h5>City:</h5>
                <p><?= $_POST["city"]; ?></p>

                <hr>

                <h5>Province:</h5>
                <p><?= $_POST["province"]; ?></p>

                <hr>
                
                <h5>Zip Code:</h5>
                <p><?= $_POST["zip_code"]; ?></p>

                <hr>

                <h5>Contact Number:</h5>
                <p><?= $_POST["contact_number"]; ?></p>

                <hr>

                <h5>Email Address:</h5>
                <p><?= $_POST["email"]; ?></p>

                <hr>

                <h5>Check-in Date:</h5>
                <p><?= $_POST["check_in_date"]; ?></p>

                <hr>

                <h5>Check-in Time:</h5>
                <p><?= $_POST["check_in_time"]; ?></p>

                <hr>

                <h5>Check-out Date:</h5>
                <p><?= $_POST["check_out_date"]; ?></p>

                <hr>

                <h5>Check-out Time:</h5>
                <p><?= $_POST["check_out_time"]; ?></p>

                <hr>

                <h5>Room Preference:</h5>
                <p><?= $_POST["room_preference"]; ?></p>

                <hr>

                <h5>Adults:</h5>
                <p><?= $_POST["adult_amount"]; ?></p>

                <hr>

                <h5>Children:</h5>
                <p><?= $_POST["child_amount"]; ?></p>

                <hr>

                <div class="d-flex justify-content-center">
                    <h2>Thank You For Trusting Us!</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>