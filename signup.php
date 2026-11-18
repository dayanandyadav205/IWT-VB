<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        fieldset {
            width: 50%;
            padding: 20px;
        }

        input {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php include './include/header.php'; ?>


    <h1>Forms</h1>

    <fieldset>
        <legend>Sign Up Form</legend>

        <form action="" method="post" name="f1" onsubmit="return chkpwd()">
            <input type="text" name="fname" placeholder="First Name" required>

            <br><br><input type="text" name="lname" placeholder="Last Name" required>

            <br><br><input type="email" name="email" placeholder="Email" required>

            <br><br><input type="password" name="password" id="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}"
                title="Must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character." required>
            <button type="button" onclick="showpwd()">&#128065;</button><br />

            <br><br><input type="password" name="cpassword" placeholder="Confirm Password" required>

            <br><br><input type="submit" name="signup" value="Signup">

        </form>
    </fieldset>

    <?php include './include/footer.php'; ?>

</body>

</html>

<script>
    function chkpwd() {
        let p1 = document.f1.password.value;
        let p2 = document.f1.cpassword.value;

        if (p1 == p2) {
            return true;
        }
        alert("Password Mismatch");
        return false;

    }

    function showpwd() {
        let x = document.getElementById('pwd');

        if (x.type == "password")
            x.type = "text";
        else {
            x.type = "password";
        }
    }
</script>

<?php
if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO signup VALUES ('$fname', '$lname', '$email', '$password')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data Inserted into Database";
    } else {
        echo "Failed to Insert";
    }
}
?>