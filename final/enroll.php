<?php
include "db.php";

$id = intval($_GET['id']);

$result = mysqli_query($conn, "SELECT * FROM stu_db WHERE id=$id");
$row = mysqli_fetch_assoc($result);

mysqli_query($conn, "
INSERT INTO enroll_db
(course, year, lastname, firstname, middlename, gender,
birthday, age, caddress, mnumber, email, school, yeargra, schooladd)

VALUES
(
'{$row['course']}',
'{$row['year']}',
'{$row['lastname']}',
'{$row['firstname']}',
'{$row['middlename']}',
'{$row['gender']}',
'{$row['birthday']}',
'{$row['age']}',
'{$row['caddress']}',
'{$row['mnumber']}',
'{$row['email']}',
'{$row['school']}',
'{$row['yeargra']}',
'{$row['schooladd']}'
)
");

mysqli_query($conn, "DELETE FROM stu_db WHERE id=$id");

header("Location:view.php");
exit();
?>