<?php
include "db.php";

if(isset($_GET['archive'])){
    $id = intval($_GET['archive']);

    $sql = "UPDATE stu_db SET status='archived' WHERE id=$id";
    $run = mysqli_query($conn, $sql);

    if(!$run){
        die("SQL Error: " . mysqli_error($conn));
    }

    header("Location: enrolled.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enrolled Students</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="dashboard">

    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="homead.php">Dashboard</a></li>
            <li><a href="enrolled.php" class="active">Enrolled</a></li>
            <li><a href="archive.php">Archive</a></li>
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
            <h1>Enrolled Students</h1>
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
                "SELECT * FROM stu_db WHERE status='accepted'");

                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr>
                    <td><?= $row['course'] ?></td>
                    <td><?= $row['year'] ?></td>
                    <td><?= $row['firstname'] . " " . $row['lastname'] ?></td>

                    <td>
                        <span class="status">Accepted</span>
                    </td>

                    <td>
                      <a href="enrolled.php?archive=<?= $row['id'] ?>" 
                            class="btn-archive"
                            onclick="return confirm('Archive this student?')"> 
                            Archive 
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