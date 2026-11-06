<?php
session_start();
include "db.php";

$email = $_SESSION['email'];

// Get ONLY logged-in student data
$result = mysqli_query($conn,
"SELECT * FROM stu_db WHERE email='$email' LIMIT 1"
);

$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Student</h2>

        <ul>
            <li><a href="student_profile.php" class="active">My Profile</a></li>
            <li><a href="status.php">My Status</a></li>
            <li><a href="#" onclick="openLogout()">Logout</a></li>
        </ul>
    </div>

    <!-- MAIN -->
    <div class="main-content">

        <div class="profile-card">

            <h1>My Enrollment Details</h1>

            <div class="grid">

                <div><b>Name:</b> <?= $user['firstname']." ".$user['lastname'] ?></div>
                <div><b>Course:</b> <?= $user['course'] ?></div>
                <div><b>Year:</b> <?= $user['year'] ?></div>

                <div><b>Gender:</b> <?= $user['gender'] ?></div>
                <div><b>Birthday:</b> <?= $user['birthday'] ?></div>
                <div><b>Age:</b> <?= $user['age'] ?></div>

                <div><b>Email:</b> <?= $user['email'] ?></div>
                <div><b>Mobile:</b> <?= $user['mnumber'] ?></div>

                <div class="full"><b>Address:</b> <?= $user['caddress'] ?></div>

                <div><b>Father:</b> <?= $user['fname'] ?></div>
                <div><b>Mother:</b> <?= $user['mname'] ?></div>
                <div><b>Parent Contact:</b> <?= $user['pcontact'] ?></div>

                <div><b>Guardian:</b> <?= $user['guardian'] ?></div>
                <div><b>Guardian No:</b> <?= $user['gnumber'] ?></div>

                <div><b>School:</b> <?= $user['school'] ?></div>
                <div><b>Year Grad:</b> <?= $user['yeargra'] ?></div>
                <div><b>School Address:</b> <?= $user['schooladd'] ?></div>

            </div>

        </div>

    </div>

</div>

</body>
</html>