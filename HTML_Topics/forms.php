<?php
include '../HTML_Topics/forms.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <?php include '../include/header.php'; ?>


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
            <br><br><input type="submit" name="register" value="Register">

        </form>
    </fieldset>


    <!-- <fieldset>
        <legend>Sign Up Form</legend>

        <table>
            <form action="" method="post" name="f1">
                <tr>
                    <td><input type="text" name="fname" placeholder="First Name" required></td>
                </tr>

                <tr>
                    <td>          <input type="text" name="lname" placeholder="Last Name" required></td>
                </tr>
      
           <tr>
            <td> <input type="submit" name="register" value="Register"></td>
           </tr>
              

            </form>
        </table>
    </fieldset> -->



    <?php include '../include/footer.php'; ?>

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