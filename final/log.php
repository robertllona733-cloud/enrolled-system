<?php
session_start();
include "db.php";

$error = "";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['fullname'] = $user['fullname'];

        if($user['role'] == "admin"){
            header("Location: homead.php");
        } else {
            header("Location: student_profile.php");
        }
        exit();

    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <h2>Welcome Back</h2>
        <p>Student Enrollment System</p>

        <?php if($error): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>

        </form>

        <div class="links">

            <a href="forgot_password.php">Forgot Password?</a>

            <span>|</span>

            <a href="register.php">Create Account</a>

        </div>

    </div>

</div>

</body>
</html>