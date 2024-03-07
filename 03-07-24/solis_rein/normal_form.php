<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normal Form</title>
</head>
<body>
    <form action="normal_form.php" method="POST">
        <div>
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" id="fullname">
            <input type="submit" value="Submit">
        </div>
        <br>
    </form>
</body>
</html>

<?php

    // isset checks if the fullname key exists in POST.
    if (isset($_POST['fullname'])) {
        echo "Hello {$_POST['fullname']}";
    } else {
        echo "";
    }

?>