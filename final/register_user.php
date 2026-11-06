<?php
include "db.php";

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = "student";

    mysqli_query($conn,"
        INSERT INTO users(fullname,email,password,role)
        VALUES('$fullname','$email','$password','$role')
    ");

    echo "Registered successfully!";
}
?>

<form method="POST">
    <input type="text" name="fullname" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="register">Register</button>
</form>