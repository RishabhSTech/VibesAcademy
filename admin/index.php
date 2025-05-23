<?php include_once 'inc/config.php'; ?>

<?php
session_start();
if (!empty($_POST["user"])) {
    $username = $_POST['user'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "select *from admin_users where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        header('Location: dashboard.php');
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
    } else {
        echo "<script>alert('Login failed. Invalid username or password.')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://www.thevibes.academy/images/favicon.png" type="image/x-icon">
</head>

<body>

    <section>
        <div class="Login-Form">
            <div class="LoginLogo"> </div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="userID">Username or Email Address</label>
                    <input type="text" name="user" id="user" class="input-style" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="password" placeholder="" />
                </div>
                <div class="form-group">
                    <button class="button-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </section>

</body>

</html>