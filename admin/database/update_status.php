<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Assuming you have an id for each reservation
    $status = $_POST['status'];

    $sql = "UPDATE `reservation` SET `status` = '$status' WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
     echo "<script>alert('Reservation Complete.'); 
     window.location.href='../list.php';</script>";
}
?>