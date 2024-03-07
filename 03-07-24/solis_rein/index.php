<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="d-flex justify-content-center align-items-center mt-4" style="height: 75vh;">
        <div class="col-3">
            <h1>Sign up</h1>
            <form action="sign_up.php" method="POST">
                <div>
                    <input type="text" name="name" class="form-control mt-4" placeholder="&#xf304 Your Name" style="font-family: Arial, FontAwesome">
                </div>
                <div>
                    <input type="text" name="email" class="form-control mt-4" placeholder="&#xf0e0 Your Email" style="font-family: Arial, FontAwesome">
                </div>
                <div>
                    <input type="text" name="contact-number" class="form-control mt-4" placeholder="&#xf2b9 Contact Number" style="font-family: Arial, FontAwesome">
                </div>
                <div>
                    <input type="text" name="location" class="form-control mt-4" placeholder="&#xf1ad Complete Address" style="font-family: Arial, FontAwesome">
                </div>

                <select name="gender" class="form-select form-select-lg mt-4">
                    <option selected disabled>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <input type="submit" value="Register" class="btn btn-primary mt-4">

            </form>
        </div>
        
        <div>
            <img src="images/computer.webp">
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/309041c954.js" crossorigin="anonymous"></script>
</body>
</html>