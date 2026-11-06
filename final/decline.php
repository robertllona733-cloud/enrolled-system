<?php
include "db.php";

$id = $_GET['id'];

mysqli_query($conn, "UPDATE stu_db SET status='declined' WHERE id='$id'");

header("Location: view.php");
exit();
?>