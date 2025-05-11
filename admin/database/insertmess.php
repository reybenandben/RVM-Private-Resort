<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `messages` (`id`, `name`, `email`, `phoneNumber`, `message`, `date`) 
    VALUES (NULL, '$name', '$email', '$phone', '$message', CURRENT_DATE());";
    $result = mysqli_query($conn, $sql);

    header("Location: ../index.php"); 

}
?>
