<?php
include "db.php";

if(!isset($_GET['id'])){
    die("No ID Found");
}

$id = intval($_GET['id']);

$sql = "UPDATE stu_db SET status='accepted' WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: enrolled.php");
    exit();
}else{
    echo "Error: " . mysqli_error($conn);
}
?>