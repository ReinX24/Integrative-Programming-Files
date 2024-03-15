<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Laboratory Exam</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container my-4 col-6">
        <h1>Hotel Reservation</h1>
        <form action="show_info.php" method="POST">
            <label for="firstname" class="form-text">First Name:</label>
            <input type="text" name="firstname" class="form-control"><br>

            <label for="lastname" class="form-text">Last Name:</label>
            <input type="text" name="lastname" class="form-control"><br>

            <label for="address" class="form-text">Address:</label>
            <input type="text" name="address" class="form-control"><br>

            <label for="city" class="form-text">City:</label>
            <input type="text" name="city" class="form-control"><br>

            <label for="province" class="form-text">Province:</label>
            <input type="text" name="province" class="form-control"><br>

            <label for="zip_code" class="form-text">Zip Code:</label>
            <input type="number" name="zip_code" class="form-control"><br>

            <label for="contact_number" class="form-text">Contact Number:</label>
            <input type="number" name="contact_number" class="form-control"><br>

            <label for="email" class="form-text">Email:</label>
            <input type="email" name="email" class="form-control"><br>

            <label for="check_in_date" class="form-text">Check In Date:</label>
            <input type="date" name="check_in_date" class="form-control"><br>

            <label for="check_in_time" class="form-text">Check In Time:</label>
            <input type="time" name="check_in_time" class="form-control"><br>

            <label for="check_out_date" class="form-text">Check Out Date:</label>
            <input type="date" name="check_out_date" class="form-control"><br>

            <label for="check_out_time" class="form-text">Check Out Time:</label>
            <input type="time" name="check_out_time" class="form-control"><br>

            <!-- Standard, Deluxe, and Suite -->
            <label for="room_preference" class="form-check-label">Room Preference:</label><br>
            <div class="form-check">
                <label for="standard" class="form-check-label">Standard</label>
                <input type="radio" name="room_preference" value="standard" class="form-check-input"><br>
                <label for="deluxe" class="form-check-label">Deluxe</label>
                <input type="radio" name="room_preference" value="deluxe" class="form-check-input"><br>
                <label for="deluxe" class="form-check-label">Suite Room</label>
                <input type="radio" name="room_preference" value="suite" class="form-check-input"><br>
            </div>

            <!-- 1 to 5 range -->
            <label for="adult_amount" class="form-text">Adults:</label>
            <select name="adult_amount" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>
            <label for="child_amount" class="form-text">Children:</label>
            <select name="child_amount" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>