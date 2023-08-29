<?php
include("db_connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM `students` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location:index.php?msg=Delete Student Successfully...");
}
else {
    echo "Failed: " . mysqli_error($con);
}

?>