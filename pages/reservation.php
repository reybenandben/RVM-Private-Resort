<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RVM Private Resort</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/Logo.ico">
    <link rel="stylesheet" href="../assets/css/reserve.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/head.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <!-- JavaScript -->
    <script defer src="../assets/js/header.js"></script>
    <script defer src="../assets/js/reservation2.js"></script>
</head>
<body>
    <div id="preloader"></div>        
    <nav class="anim-nav">
        <ul class="sidebar">
            <li onclick="hideSidebar()">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
            </li>
            <li>
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-list">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-list">
                <a class="nav-link" href="accomodations.php">Accommodations</a>
            </li>
            <li class="nav-list active">
                <a class="nav-link" href="reservation.php">Reservation</a>
            </li>
            <li class="nav-list">
                <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-list">
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
            <li class="nav-list hideOnMobile active">
                <a class="nav-link" href="reservation.php">Reservation</a>
            </li>
            <li class="nav-list hideOnMobile">
                <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-list hideOnMobile">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
            <li class="menu-button" onclick="showSidebar()">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a>
            </li>
        </ul>
    </nav>
    <div class="homepage anim-nav">
        <img class="pichomepage" src="../assets/images/reservation.jpg" alt="RESORT PICTURE">
        <h1 class="content-homepage anim">Reservation</h1> 
    </div>

    <div class="reservations">
        <div class="line1 hidden"></div>
        <div class="line2 hidden2"></div>
        <div class="line3 hidden"></div>

        <h1 class="hidden">Reservation Form</h1>
        <div class="forms hidden2">
            <h2>Personal Information</h2>

            <form id="reservation-form">
                <div class="fullname">
                    <div>
                        <label for="firstname">First Name:</label><br>
                        <input type="text" id="firstname" name="firstname" required><br><br>
                    </div>
                    <div>
                        <label for="lastname">Last Name:</label><br>
                        <input type="text" id="lastname" name="lastname" required><br><br>
                    </div>
                </div>

                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <h2>Reservation Details</h2>

                <div class="calendar-container">
                    <h2>Calendar</h2>
                    <div>
                        <button type="button" onclick="prevMonth()">Previous</button>
                        <button type="button" onclick="nextMonth()">Next</button>
                    </div>
                    <div id="calendar"></div>
                </div>

                <label for="accommodation">Accommodation Type:</label>
                <select id="accommodation" name="accommodation" required>
                    <option value="day_time">DAY TIME (9am - 5pm)</option>
                    <option value="night_time">NIGHT TIME (7pm - 6am)</option>
                    <option value="22hrs">22 HRS (8am - 6am)</option>
                </select><br><br>

                <label for="reservation_date">Reservation Date:</label><br>
                <input type="date" id="reservation_date" name="reservation_date" required><br><br>

                <fieldset>
                    <legend>Additionals (checkbox):</legend>
                    <label><input type="checkbox" name="additionals" value="videoke"> Videoke / Sound System (P600)</label><br>
                    <label><input type="checkbox" name="additionals" value="gas_stove"> Gas Stove (P500)</label><br>
                    <label><input type="checkbox" name="additionals" value="mattress"> Full double mattress and pillows - P300</label><br>
                    <label><input type="checkbox" name="additionals" value="room_a"> Room A (P2,000)</label><br>
                    <label><input type="checkbox" name="additionals" value="room_b"> Room B (P2,000)</label><br>
                    <label>Fan Villa</label><br>
                    <label><input type="checkbox" name="additionals" value="8hrs"> 8hrs (P1,000)</label><br>
                    <label><input type="checkbox" name="additionals" value="22hrs"> 22hrs (P1,500)</label><br>

                </fieldset><br>

                <div class="reminder">
                    <h4>Please Note</h4>
                    <h5>Extension fee: P800 per succeeding hour</h5> 
                    <h5>Max of 30pax (add P180/head)</h5><br>
                </div>

                <input type="submit" value="Submit" id="submitButton" class="hidden">
            </form>      
        </div>
    </div>    
    <br><br>
    <div class="footer">
        <div class="footer-content">
            <h1 align="center">RVM Private Resort</h1><br>
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

    <div id="thankYouModal" class="modal">
    <div class="modal-content">
        <h2>Thank You for Your Reservation!</h2>
        <p>You will be redirected to the homepage shortly.</p>
    </div>
</body>
</html>
