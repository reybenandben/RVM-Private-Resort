<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM adminaccount WHERE userName = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    

    if (mysqli_num_rows($result) == 1) {
        header("Location: ../mailbox.php"); 
        exit();
    } else {
        header("Location: ../../login.php?error=invalid");
        exit();
    }
}
?>
