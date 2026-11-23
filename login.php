<?php
include 'connection.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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

    <form action="" method="post">
        <fieldset>
            <legend>Login Form</legend>
            <input type="email" name="email" placeholder="Email" required>
            <br><br><input type="password" name="password" placeholder="Password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}"
                title="Must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character." required>

            <br><br><input type="submit" name="login" value="Login">
        </fieldset>
    </form>

    <?php include './include/footer.php'; ?>

</body>

</html>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Login successful";
        $_SESSION['email'] = $email;
        header('location: dashboard.php');
        exit();
    } else {
        echo "Invalid email or password";
    }
}
?>