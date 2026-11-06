<?php
include "db.php";

$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM stu_db WHERE id=$id");
$user = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $course = $_POST['course'];
    $year = $_POST['year'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $age = $_POST['age'];
    $caddress = $_POST['caddress'];
    $mnumber = $_POST['mnumber'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $pcontact = $_POST['pcontact'];
    $guardian = $_POST['guardian'];
    $gnumber = $_POST['gnumber'];
    $school = $_POST['school'];
    $yeargra = $_POST['yeargra'];
    $schooladd = $_POST['schooladd'];

    $sql = "UPDATE stu_db SET
        course='$course',
        year='$year',
        lastname='$lastname',
        firstname='$firstname',
        middlename='$middlename',
        gender='$gender',
        birthday='$birthday',
        age='$age',
        caddress='$caddress',
        mnumber='$mnumber',
        email='$email',
        fname='$fname',
        mname='$mname',
        pcontact='$pcontact',
        guardian='$guardian',
        gnumber='$gnumber',
        school='$school',
        yeargra='$yeargra',
        schooladd='$schooladd',
        status='pending'
    WHERE id=$id";

 if(mysqli_query($conn,$sql)){
    echo "
    <script>
        if(confirm('Student updated successfully! Click OK to go to Profile page.')){
            window.location.href='user.php';
        }
    </script>
    ";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
     <div class="sidebar">

        <h2>Student</h2>

        <ul>
            <li><a href="home.php" class="active">Enroll</a></li>
            <li><a href="user.php"class="active">My Status</a></li>
            <li><a href="profile.php"class="active">Profile</a></li>
            <li><a href="#" onclick="openLogout()"class="active">Logout</a></li>
        </ul>

    </div>


    <!-- MAIN CONTENT -->
    <div class="main-content">

        <form method="POST">

            <h1>Update Student Information</h1>

            <!-- COURSE / YEAR -->
            <div class="row">
                <div class="field">
                    <label>Course</label>
                    <select name="course">
                        <option value="BSIT" <?= $user['course']=='BSIT'?'selected':'' ?>>BSIT</option>
                        <option value="BSIS" <?= $user['course']=='BSIS'?'selected':'' ?>>BSIS</option>
                        <option value="BSOA" <?= $user['course']=='BSOA'?'selected':'' ?>>BSOA</option>
                    </select>
                </div>

                <div class="field">
                    <label>Year</label>
                    <select name="year">
                        <option <?= $user['year']=='1st yr'?'selected':'' ?>>1st yr</option>
                        <option <?= $user['year']=='2nd yr'?'selected':'' ?>>2nd yr</option>
                        <option <?= $user['year']=='3rd yr'?'selected':'' ?>>3rd yr</option>
                        <option <?= $user['year']=='4th yr'?'selected':'' ?>>4th yr</option>
                    </select>
                </div>
            </div>

            <!-- NAME -->
            <div class="row">
                <div class="field">
                    <label>Firstname</label>
                    <input type="text" name="firstname" value="<?= $user['firstname']; ?>">
                </div>

                <div class="field">
                    <label>Middlename</label>
                    <input type="text" name="middlename" value="<?= $user['middlename']; ?>">
                </div>

                <div class="field">
                    <label>Lastname</label>
                    <input type="text" name="lastname" value="<?= $user['lastname']; ?>">
                </div>
            </div>

            <!-- INFO -->
            <div class="row">
                <div class="field">
                    <label>Gender</label>
                    <select name="gender">
                        <option value="male" <?= $user['gender']=='male'?'selected':'' ?>>Male</option>
                        <option value="female" <?= $user['gender']=='female'?'selected':'' ?>>Female</option>
                        <option value="lgbtq+" <?= $user['gender']=='lgbtq+'?'selected':'' ?>>LGBTQ+</option>
                    </select>
                </div>

                <div class="field">
                    <label>Birth Date</label>
                    <input type="date" name="birthday" value="<?= $user['birthday']; ?>">
                </div>

                <div class="field">
                    <label>Age</label>
                    <input type="number" name="age" value="<?= $user['age']; ?>">
                </div>
            </div>

            <!-- CONTACT -->
            <div class="row">
                <div class="field">
                    <label>Mobile Number</label>
                    <input type="tel" name="mnumber" value="<?= $user['mnumber']; ?>">
                </div>

                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= $user['email']; ?>">
                </div>

                <div class="field"></div>
            </div>

            <!-- ADDRESS -->
            <div class="row">
                <div class="field full">
                    <label>Complete Address</label>
                    <textarea name="caddress"><?= $user['caddress']; ?></textarea>
                </div>
            </div>

            <!-- PARENTS -->
            <div class="row">
                <div class="field">
                    <label>Father Name</label>
                    <input type="text" name="fname" value="<?= $user['fname']; ?>">
                </div>

                <div class="field">
                    <label>Mother Name</label>
                    <input type="text" name="mname" value="<?= $user['mname']; ?>">
                </div>

                <div class="field">
                    <label>Parent Contact</label>
                    <input type="tel" name="pcontact" value="<?= $user['pcontact']; ?>">
                </div>
            </div>

            <!-- GUARDIAN -->
            <div class="row">
                <div class="field">
                    <label>Guardian</label>
                    <input type="text" name="guardian" value="<?= $user['guardian']; ?>">
                </div>

                <div class="field">
                    <label>Guardian Contact</label>
                    <input type="tel" name="gnumber" value="<?= $user['gnumber']; ?>">
                </div>

                <div class="field"></div>
            </div>

            <!-- SCHOOL -->
            <div class="row">
                <div class="field">
                    <label>School</label>
                    <input type="text" name="school" value="<?= $user['school']; ?>">
                </div>

                <div class="field">
                    <label>Year Graduated</label>
                    <input type="text" name="yeargra" value="<?= $user['yeargra']; ?>">
                </div>

                <div class="field">
                    <label>School Address</label>
                    <input type="text" name="schooladd" value="<?= $user['schooladd']; ?>">
                </div>
            </div>

            <button type="submit" name="update">Resubmit </button>

        </form>

    </div>

</div>

</body>
</html>