

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RVM Private Resort</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/Logo.ico">
    <link rel="stylesheet" href="../assets/css/contactus.css">
    <link rel="stylesheet" href="../assets/css/reserve.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/head.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <!-- JavaScript -->
    <script defer src="../assets/js/header.js"></script>
    <script defer src="../assets/js/Reservation.js"></script>
</head>
<body>
    <div id="preloader">
    </div>
    <nav class="anim-nav">
            <ul class="sidebar">
                <li onclick="hideSidebar()">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
                </li>
                <li>
                    <a class="nav-link " href="../index.php">Home</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link" href="accomodations.php">Accommodations</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link" href="reservation.php">Reservation</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-list active">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
            </ul>
            <ul>
                <li>
                    <label class="logo"><a href="../index.php"><img class="logo" src="../assets/images/RVM.png"></a></label>
                </li>
                <li>
                    <a class="nav-link hideOnMobile" href="../index.php">Home</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="accomodations.php">Accommodations</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="reservation.php">Reservation</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-list hideOnMobile active">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
                <li class="menu-button" onclick="showSidebar()">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a>
                </li>
            </ul>
        </nav>

        <div class="homepage anim-nav">
            <img class="pichomepage" src="../assets/images/contaclus.jpg" alt="RESORT PICTURE">
            <h1 class="content-homepage anim">Contact Us</h1> 
        </div>

        <div class="Contact">
        <div class="image-container">
        <img src="../assets/images/Logo.png" alt="Photo" class="photo hidden2">
    </div>
    <h1 class="message-heading hidden">SEND US A MESSAGE</h1>
    <div class="highlight-box hidden2">
        <form action="../admin/database/insertmess.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" value="Submit" class="hidden">
        </form>
    </div>
</div>
        
        <div class="footer">
            <div class="footer-content">
            <h1 align="center">RVM Private Resort<h1><br>
            <h3>Sabitan St. Sto Rosario. Malolos Bulacan</h3><br>
            <h3>0991-448-3484</h3><br>
            <h3>RVM Private Resort</h3>
            </div>
            <img class="pichomepage" src="../assets/images/footer.jpg" alt="FooterPic">
        
        </div>

        <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <form action="../index.php" method="POST">
            <span class="close">&times;</span>
            <h2>Confirm Your Message</h2>
            <div id="modalDetails"></div>
            <button class="confirm" id="confirmButton">Confirm</button>
            <button class="confirm" id="cancelButton">Cancel</button>
            </form>
        </div>
    </div>

        <!-- Thank You Modal -->
        <div id="thankYouModal" class="modal">
            <div class="modal-content">
                <h2>Thank You for Your Message!</h2>
                <p>You will be redirected to the homepage shortly.</p>
            </div>
        </div>
</body>
</html>
