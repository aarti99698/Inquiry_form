<?php

include("config.php");

if (isset($_POST['register'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["phone"];
    $position = $_POST["position"];
    $started = $_POST["started"];
    $document = $_POST["document"];

    mysqli_query($conn, "insert into register(fname, lname, email, phone, position, started, document) value('$fname', '$lname', '$email', '$mobile','$position', '$started', '$document')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Registration Form
            </div>
            <div class="form">
                <div class="input_field">
                    <label for=""><b>First Name</b></label>
                    <input type="text" class="input" name="fname" Required>
                </div>

                <div class="input_field">
                    <label for=""><b>Last Name</b></label>
                    <input type="text" class="input" name="lname" Required>
                </div>

                <div class="input_field">
                    <label for=""><b>Email</b></label>
                    <input type="email" class="input" name="email" Required>
                </div>

                <div class="input_field">
                    <label for=""><b>Phone Number</b></label>
                    <input type="tel" class="input" name="phone" Required onkeypress="return validateNumber(event)"
                        maxlength="10">
                </div>

                <div class="input_field">
                    <label for=""><b>Applied Position</b></label>
                    <select type="text" class="input" name="position" Required>
                        <option value="Select">Select</option>
                        <option value="MCA">MCA</option>
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                        <option value="MBA">MBA</option>
                        <option value="B.tech">B.tech</option>
                        <option value="MPharma">MPharma</option>
                        <option value="BPharma">BPharma</option>
                    </select>
                </div>

                <div class="input_field">
                    <label for=""><b>Possible Started Date</b></label>
                    <input type="date" class="input" name="started" Required>
                </div>

                <div class="input_field">
                    <label for="docs"><b>Upload Document</b></label>
                    <input type="file" class="input" name="document" id="file" accept=".pdf,.doc,.docx,.txt">
                </div>

                <div class="input_field">
                    <button type="submit" value="register" class="btn" name="register">Register</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function validateNumber(e) {
            const pattern = /^[0-9]$/;

            return pattern.test(e.key)
        }
    </script>

    <script>
        const fileInput = document.getElementById('docs');
        const fileInput = document.getElementById('file');

        filenInput.addEventListener('change' function () {
            fileDisplay.textContent = fileInput.files[0].name;
        })
</body >

</html >