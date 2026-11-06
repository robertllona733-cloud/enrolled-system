<?php
include "db.php";


if(isset($_GET['restore'])){

    $id = intval($_GET['restore']);

    $sql = "UPDATE stu_db 
            SET status='accepted' 
            WHERE id='$id'";

    $run = mysqli_query($conn, $sql);

    if(!$run){
        die("SQL Error: " . mysqli_error($conn));
    }

   header("Location: archive.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Archived Students</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="dashboard">

    <div class="sidebar">
        <h2>Admin</h2>

        <ul>
            <li><a href="homead.php">Dashboard</a></li>
            <li><a href="enrolled.php">Enrolled</a></li>
            <li><a href="archive.php" class="active">Archive</a></li>
           <li><a href="#">Reports</a></li>
            <li><a href="settings.php">Settings</a></li>
             <li>
               <a href="#" onclick="openLogoutPopup()">
                Logout
                </a>
        </ul>
    </div>

    <div class="main">

        <div class="topbar">
            <h1>Archived Students</h1>
        </div>

        <div class="table-box">

            <table>

                <tr>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php

                $result = mysqli_query($conn,
                "SELECT * FROM stu_db WHERE status='archived'");

                if(mysqli_num_rows($result) == 0){
                    echo "<tr>
                            <td colspan='5'>
                                No archived students found
                            </td>
                          </tr>";
                }

                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr>

                    <td><?= $row['course'] ?></td>

                    <td><?= $row['year'] ?></td>

                    <td>
                        <?= $row['firstname'] . " " . $row['lastname'] ?>
                    </td>

                    <td>
                        <span class="status">Archived</span>
                    </td>

                    <td>

                        <a href="archive.php?restore=<?= $row['id'] ?>"
                        class="btn-restore"
                        onclick="return confirm('Restore this student?')">
                        

                        Restore

                        </a>

                    </td>

                </tr>

                <?php } ?>

            </table>

        </div>

    </div>

</div>

</body>
</html>