<?php
include "db.php";


if(isset($_GET['accept'])){
    $id = intval($_GET['accept']);
    mysqli_query($conn, "UPDATE stu_db SET status='accepted' WHERE id=$id");
}

if(isset($_GET['decline'])){
    $id = intval($_GET['decline']);
    mysqli_query($conn, "UPDATE stu_db SET status='declined' WHERE id=$id");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="view.css">
</head>

<body>

<div class="table-section">
    <h2>Registration</h2>

    <div class="table-container">

        <table class="styled-table two-column">

            <thead>
                <tr>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>Age</th>
                    <th>Complete Address</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>School Last Attended</th>
                    <th>Year Graduated</th>
                    <th>School Address</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM stu_db WHERE status='pending'");

            while ($row = mysqli_fetch_assoc($result)){
            ?>

                <tr>
                    <td><?= $row['course'] ?></td>
                    <td><?= $row['year'] ?></td>
                    <td><?= $row['lastname'] ?></td>
                    <td><?= $row['firstname'] ?></td>
                    <td><?= $row['middlename'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['birthday'] ?></td>
                    <td><?= $row['age'] ?></td>
                    <td><?= $row['caddress'] ?></td>
                    <td><?= $row['mnumber'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['school'] ?></td>
                    <td><?= $row['yeargra'] ?></td>
                    <td><?= $row['schooladd'] ?></td>

                    <td>

                        <!-- ACCEPT -->
                        <a class="btn accept"
                           href="?accept=<?= $row['id']; ?>">
                           Accept
                        </a>

                        <!-- DECLINE -->
                        <a class="btn decline"
                           href="?decline=<?= $row['id']; ?>"
                           onclick="return confirm('Are you sure you want to decline this student?')">
                           Decline
                        </a>

                    </td>

                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>