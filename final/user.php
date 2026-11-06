<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <link rel="stylesheet" href="user.css">
</head>
<body>

<div class="topbar">

    <div class="logo">
        <h2>Student Portal</h2>
    </div>

    <ul class="nav-links">
        <li><a href="homepage.php" >Home</a></li>
        <li><a href="user.php"class="active">My Status</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="#" onclick="openLogout()">Logout</a></li>
    </ul>

</div>


<div class="container">

<?php
include "db.php";

$pending = mysqli_query($conn,
"SELECT * FROM stu_db WHERE LOWER(TRIM(status))='pending'");

$accepted = mysqli_query($conn,
"SELECT * FROM stu_db WHERE LOWER(TRIM(status))='accepted'");


$declined = mysqli_query($conn,
"SELECT * FROM stu_db WHERE LOWER(TRIM(status))='declined'");
?>


<div class="table-section">

    <h2 class="pending-title">Pending Students</h2>

    <div class="table-wrapper">

        <table class="styled-table">

            <thead>
                <tr>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Status</th>
                   
                </tr>
            </thead>

            <tbody>

            <?php while($row = mysqli_fetch_assoc($pending)) { ?>

                <tr>

                    <td><?= $row['course']; ?></td>
                    <td><?= $row['year']; ?></td>
                    <td><?= $row['lastname']; ?></td>
                    <td><?= $row['firstname']; ?></td>
                    <td><?= $row['gender']; ?></td>
                    <td><?= $row['birthday']; ?></td>
                    <td><?= $row['age']; ?></td>
                    <td><?= $row['caddress']; ?></td>
                    <td><?= $row['mnumber']; ?></td>
                    <td><?= $row['email']; ?></td>

                    <td>
                        <span class="status pending">
                            Pending
                        </span>
                    </td>

                   
                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

<!-- ================= ACCEPTED ================= -->
<div class="table-section">

    <h2 class="accepted-title">Accepted Students</h2>

    <div class="table-wrapper">

        <table class="styled-table">

            <thead>
                <tr>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

            <?php while($row = mysqli_fetch_assoc($accepted)) { ?>

                <tr>

                    <td><?= $row['course']; ?></td>
                    <td><?= $row['year']; ?></td>
                    <td><?= $row['lastname']; ?></td>
                    <td><?= $row['firstname']; ?></td>
                    <td><?= $row['gender']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['mnumber']; ?></td>

                    <td>
                        <span class="status accepted">
                            Accepted
                        </span>
                    </td>

                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

<div class="table-section">

    <h2 class="declined-title">Declined Students</h2>

    <div class="table-wrapper">

        <table class="styled-table">

            <thead>
                <tr>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php while($row = mysqli_fetch_assoc($declined)) { ?>

                <tr>

                    <td><?= $row['course']; ?></td>
                    <td><?= $row['year']; ?></td>
                    <td><?= $row['lastname']; ?></td>
                    <td><?= $row['firstname']; ?></td>
                    <td><?= $row['gender']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['mnumber']; ?></td>

                    <td>
                        <span class="status declined">
                            Declined
                        </span>
                    </td>

                     <td>
                        <a class="btn edit"
                        href="ed.php?id=<?= $row['id']; ?>">
                            Edit
                        </a>
                    </td>


                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</div>

<script>
function openLogout(){
    alert("Logout function here.");
}
</script>

</body>
</html>