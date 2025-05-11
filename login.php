<?php
    include('admin/database/connect.php');

        if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
            echo '<script>alert("Invalid Username or Password");</script>';
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.ico">
    <title>Login Page</title>
    <link rel="stylesheet" href="admin/css/login.css">

</head>
<body>
    <main>
    <div class="container">
        <img class="logo" src="assets/images/Logo.png" alt="Logo">
        <h2>ADMIN PAGE</h2>
        <h3>Login</h3>
        <link rel="icon" type="image/x-icon" href="../assets/images/Logo.ico">
        <form action="admin/database/checklogin.php" method="post" id="loginForm">
            <div class="error" id="error"></div>
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    </main>
</body>
</html>