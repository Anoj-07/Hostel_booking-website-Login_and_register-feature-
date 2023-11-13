<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login_register.css">

</head>
<!-- <style>
    body {
        padding: 50px;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 50px;
        box-shadow: rgb(100, 100, 111, 0.2);
    }

    .form-group {
        margin-bottom: 30px;
    }
</style> -->

<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $errors = array();
            if (empty($fullname) or empty($email) or empty($password) or empty($passwordRepeat)) {
                array_push($errors, "All fields are Required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Passwords do not match");
            }
            require_once 'database.php';
            $sql ="SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn , $sql);
            $rowCount = mysqli_num_rows($result);
            if($rowCount > 0){
                array_push($errors , "Email already exists!" );
            }
            
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                //insert into database
                
                $sql = "INSERT INTO users(full_name, email, password) VALUES(?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                if ($preparestmt) {
                    mysqli_stmt_bind_param($stmt, 'sss', $fullname, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registerd Successfully</div>";
                }
            }
        }
        ?>
        <div class="container-img">
       <a href="index.php" title="close icons"><img src="cancel.png" alt="" ></a>
       </div>
        <form action="registration.php" method="post">
            <div class="from-group">
                <input type="text" class="form-control" name="fullname" placeholder="full Name">
            </div>
            <div class="from-group">
                <input type="Email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="from-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="from-group">
                <input type="text" class="form-control" name="repeat_password" placeholder="Repeat Password">
            </div>
            <div class="from-btn">
                <input type="submit" class="btn btn-primary" name="submit" value="Register">
            </div>

            <div class="form-signin">
                <h6>Already have account || </h6>
                <a href="login.php">Signin</a>
            </div>

        </form>
    </div>
</body>

</html>