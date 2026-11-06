<?php
include "db.php";

if(isset($_POST['save'])){

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

    $sql = "INSERT INTO stu_db
    (course, year, lastname, firstname, middlename, gender, birthday, age, caddress, mnumber, email, fname, mname, pcontact, guardian, gnumber, school, yeargra, schooladd)

    VALUES

    ('$course','$year','$lastname','$firstname','$middlename','$gender','$birthday','$age','$caddress','$mnumber','$email','$fname','$mname','$pcontact','$guardian','$gnumber','$school','$yeargra','$schooladd')";

    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Student Registration</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2>Student</h2>

        <ul>

            <li>
                <a href="home.php" class="active">
                    Enroll
                </a>
            </li>

            <li>
                <a href="user.php">
                    My Status
                </a>
            </li>

            <li>
                <a href="profile.php">
                    Profile
                </a>
            </li>

            <li>
                <a href="#" onclick="openLogout()">
                    Logout
                </a>
            </li>

        </ul>

    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <form method="POST">

            <h1>Student Registration Form</h1>

            <!-- COURSE + YEAR -->
            <div class="row">

                <div class="field">

                    <label>Course</label>

                    <select name="course">
                        <option>Select</option>
                        <option>BSIT</option>
                        <option>BSIS</option>
                        <option>BSOA</option>

                    </select>

                </div>

                <div class="field">

                    <label>Year</label>

                    <select name="year">
                        <option>Select</option>
                        <option>1st yr</option>
                        <option>2nd yr</option>
                        <option>3rd yr</option>
                        <option>4th yr</option>

                    </select>

                </div>

            </div>

            <!-- NAME -->
            <div class="row">

                <div class="field">

                    <label>Firstname</label>

                    <input type="text" name="firstname" required>

                </div>

                <div class="field">

                    <label>Middlename</label>

                    <input type="text" name="middlename">

                </div>

                <div class="field">

                    <label>Lastname</label>

                    <input type="text" name="lastname" required>

                </div>

            </div>

            <!-- PERSONAL INFO -->
            <div class="row">

                <div class="field">

                    <label>Gender</label>

                    <select name="gender">
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>LGBTQ+</option>

                    </select>

                </div>

                <div class="field">

                    <label>Birth Date</label>

                    <input type="date" name="birthday" required>

                </div>

                <div class="field">

                    <label>Age</label>

                    <input type="number" name="age" required>

                </div>

            </div>

            <!-- CONTACT -->
            <div class="row">

                <div class="field">

                    <label>Mobile Number</label>

                    <input
                        type="text"
                        name="mnumber"
                        maxlength="11"
                        pattern="[0-9]{11}"
                        placeholder="09XXXXXXXXX"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        required
                    >

                </div>

                <div class="field">

                    <label>Email</label>

                    <input type="email" name="email" required>

                </div>

            </div>

            <!-- ADDRESS -->
            <div class="field full-address">

                <label>Complete Address</label>

                <textarea name="caddress" required></textarea>

            </div>

            <!-- PARENTS -->
            <div class="row">

                <div class="field">

                    <label>Father Name</label>

                    <input type="text" name="fname">

                </div>

                <div class="field">

                    <label>Mother Name</label>

                    <input type="text" name="mname">

                </div>

                <div class="field">

                    <label>Parent Contact</label>

                    <input
                        type="text"
                        name="pcontact"
                        maxlength="11"
                        pattern="[0-9]{11}"
                        placeholder="09XXXXXXXXX"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    >

                </div>

            </div>

            <!-- GUARDIAN -->
            <div class="row">

                <div class="field">

                    <label>Guardian</label>

                    <input type="text" name="guardian">

                </div>

                <div class="field">

                    <label>Guardian Contact</label>

                    <input
                        type="text"
                        name="gnumber"
                        maxlength="11"
                        pattern="[0-9]{11}"
                        placeholder="09XXXXXXXXX"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    >

                </div>

            </div>

            <!-- SCHOOL -->
            <div class="row">

                <div class="field">

                    <label>School</label>

                    <input type="text" name="school">

                </div>

                <div class="field">

                    <label>Year Graduated</label>

                    <input type="text" name="yeargra">

                </div>

                <div class="field">

                    <label>School Address</label>

                    <input type="text" name="schooladd">

                </div>

            </div>

            <button type="submit" name="save" onclick="showSuccess()">

                Submit Enrollment

            </button>

        </form>

    </div>

</div>

<!-- SUCCESS POPUP -->
<div id="successPopup" class="success-popup">

    <div class="success-box">

        <div class="checkmark">✓</div>

        <h2>Enrollment Successful</h2>

        <p>Your registration form has been submitted successfully.</p>

        <button onclick="closeSuccess()">

            OK

        </button>

    </div>

</div>

<!-- JAVASCRIPT -->
<script>

function showSuccess(){

    setTimeout(function(){

        document.getElementById("successPopup").style.display = "flex";

    }, 500);

}

function closeSuccess(){

    document.getElementById("successPopup").style.display = "none";

}

function openLogout(){

    document.getElementById("logoutModal").style.display = "flex";

}

function closeLogout(){

    document.getElementById("logoutModal").style.display = "none";

}

</script>

</body>
</html>