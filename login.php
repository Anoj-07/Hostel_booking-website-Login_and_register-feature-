<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login_register.css">
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    header("Location: http://localhost/pratice%20js/index_1.php");
                    die();
                } else {
                    echo "<div class ='alert alert-danger'>Password Doesnot match </div>";
                }
            } else {
                echo "<div Class = 'alert alert-danger'>Email doesnot match</div>";
            }
        }

        ?>

        <div class="container-img">
            <a href="index.php" title="close icons"><img src="cancel.png" alt=""></a>
        </div>
        <form action="login.php" method="post">
            <div class="from-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>
            <div class="from-group">
                <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>
            <div class="from-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>

            <div class="from-register">
                <h6>Don't have Account || </h6>
                <a href="registration.php">Register</a>
            </div>
        </form>
    </div>
</body>

</html>