<?php
include "db.php";
$id = $_GET['id'];
mysqli_query($conn,"DELETE  FROM stu_db WHERE id=$id");

header("location: view.php");
?>