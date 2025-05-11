<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $curpassword = $_POST['current-password'];
    $newpassword = $_POST['new-password'];
    $conpassword = $_POST['confirm-password'];

    // Prepare the SQL query
    $sql = "SELECT password FROM adminaccount WHERE userName = 'RVM2286'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Fetch the password from the result
        $stored_password = $row['password'];
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='../profile.php';</script>";
        exit;
    }

    if ($newpassword !== $conpassword) {
        echo "<script>alert('New password and confirm password do not match.'); window.location.href='../profile.php';</script>";
    } elseif ($curpassword !== $stored_password) {
        echo "<script>alert('Current password is incorrect.'); window.location.href='../profile.php';</script>";
    } else {

        // Update the password in the database
        $sql = "UPDATE adminaccount SET password = '$newpassword' WHERE userName = 'RVM2286'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Password updated successfully.'); window.location.href='../profile.php';</script>";
        } else {
            echo "<script>alert('Error updating password: " . mysqli_error($conn) . "'); window.location.href='../profile.php';</script>";
        }
    }
}
?>