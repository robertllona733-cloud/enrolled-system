<?php
include "db.php";

$id = $_GET['id'];
$status = $_GET['status'];

$query = "UPDATE stu_db SET status='$status' WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    header("Location: your_table_page.php"); // change to your page
} else {
    echo "Error updating status";
}
?>