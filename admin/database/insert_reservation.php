<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $accom = $_POST["accommodation"];
    $reserve = $_POST["reservation_date"];
    $Additionals = $_POST["additionals"];

    $sql = "INSERT INTO `reservation` (`id`, `firstName`, `lastName`, `phoneNumber`, `email`
    , `type`, `reservationDate`, `additionals`, `status`, `date`) VALUES
     (NULL, '$fname', '$lname', '$phone', '$email', '$accom',
      '$reserve', '$Additionals', 'Pending', CURRENT_DATE());";
    $result = mysqli_query($conn, $sql);

    header("Location: ../request.php"); 
}
?>
