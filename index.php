<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RVM Private Resort</title>
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.ico">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="assets/css/contactus.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- Link to JS -->
    <script defer src="assets/js/homes.js"></script>
    <script defer src="assets/js/header.js"></script>
</head>
<body>
        <div id="preloader">
        </div>
        <nav class="anim-nav">
            <ul class="sidebar">
                <li class="nav-link " onclick="hideSidebar()">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
                </li>
                <li>
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link" href="./pages/about.php">About</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link" href="./pages/accomodations.php">Accommodations</a>
                </li>
                <li class="nav-list"class="nav-list">
                    <a class="nav-link" href="./pages/reservation.php">Reservation</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link" href="./pages/gallery.php">Gallery</a>
                </li>
                <li class="nav-list"class="nav-list">
                    <a class="nav-link" href="./pages/contactus.php">Contact Us</a>
                </li>
            </ul>
            <ul>
                <li>
                    <label class="logo"><a href="index.php"><img class="logo" src="assets/images/RVM.png"></a></label>
                </li>
                <li>
                    <a class="nav-link hideOnMobile active" href="index.php">Home</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="./pages/about.php">About</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="./pages/accomodations.php">Accommodations</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="./pages/reservation.php">Reservation</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="./pages/gallery.php">Gallery</a>
                </li>
                <li class="nav-list hideOnMobile">
                    <a class="nav-link" href="./pages/contactus.php">Contact Us</a>
                </li>
                <li class="menu-button" onclick="showSidebar()">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a>
                </li>
            </ul>
        </nav>


            <div class="homepage anim-nav">
                <div class="child bg-one"></div>
                <img class="zoom" src="assets/images/Home.jpg" alt="RESORT PICTURE">
                <h1 class="anim">We hope you'll enjoy <br>your stay</h1>
                    <form action="./pages/reservation.php">
                        <button class="hidden2" type="submit">BOOK RESERVATION</button>
                    </form>
            </div>
        <br>

        <div class="flex-container">

            <div class="flex-items1 hidden"> 
                <div id="parent2">
                    <img src="assets/images/day.jpg" class="pictures">
                    <img src="assets/images/day.jpg" class="picture1">
                    <img src="assets/images/day.jpg" class="picture2">
                </div>
                <div class="white"></div>
                <p class="text">DAYTIME</p>
                <p class="text">(9AM - 5PM)</p>
            </div>
            <div class="flex-items1 hidden">
                <div id="parent2"> 
                    <img src="assets/images/night2.jpg" class="pictures">
                    <img src="assets/images/night2.jpg" class="picture1">
                    <img src="assets/images/night2.jpg" class="picture2">
                </div>
                <div class="white"></div>
                <p class="text">NIGHT TIME</p>
                <p class="text">(7PM - 6AM)</p>
            </div>
            <div class="flex-items1 hidden"> 
                <div id="parent2"> 
                    <img src="assets/images/22hr.jpg" class="pictures">
                    <img src="assets/images/22hr.jpg" class="picture1">
                    <img src="assets/images/22hr.jpg" class="picture2">
                </div>
                <div class="white"></div>
                <p class="text">WHOLE DAY</p>
                <p class="text">(8AM - 6AM)</p>
            </div>

        </div>
        <br>

        <div class="welcome">
            <div class="welcome-text hidden2">
            <h1>Welcome to your luxurious home away from home</h1>
            <br><br><br>
            <p>RVM Private Resort in Malolos, Bulacan, offers a cozy and luxurious retreat. 
                 With comfortable accommodations and a serene atmosphere. It's the perfect place to relax
                 and unwind. Come enjoy a memorable getaway with us!</p>
            </div>

            <div class="fill hidden">
                <div id="parent">
                    <div class="brown"></div>
                    <div class="brown2"></div>
                    <img class="pics1"  src="assets/images/welpool.jpg" alt="Welcome">
                    <img class="pics2" src="assets/images/welpool.jpg" alt="Welcome">
                    <img class="pics3" src="assets/images/welpool.jpg" alt="Welcome">
                </div>
            </div>
        </div>

        <div class="rooms">
            <div class="rooms box">
            <div class="hidden">
                <h3>Big Family Room<h3>
                <img class="welcomepic" src="assets/images/BigFamilyRoom.jpg" alt="Welcome">
                <h3>Room A<h3>
                <img class="welcomepic" src="assets/images/RoomA.jpg" alt="Welcome">
            </div>
            <div class="hidden">
                <h1>R</h1>
                <h1>O</h1>
                <h1>O</h1>
                <h1>M</h1>
            </div>
            <div class="hidden2">
                <h3>Room B<h3>
                <img class="welcomepic" src="assets/images/RoomB.jpg" alt="Welcome">
                <h3>Fan Villa<h3>
                <img class="welcomepic" src="assets/images/FanVilla.jpg" alt="Welcome">
            </div>
            </div>
        </div>
        
        <div class="gallery-wrap hidden">
            <img src="assets/images/Gallery/Backward.png" id="backBtn">
            <div class="gallery">
                <div>
                    <span><img src="assets/images/Gallery/1.jpg" alt="PICTURE1"></span>
                    <span><img src="assets/images/Gallery/2.jpg" alt="PICTURE2"></span>
                    <span><img src="assets/images/Gallery/3.jpg" alt="PICTURE3"></span>
                </div>
                <div>
                    <span><img src="assets/images/Gallery/7.jpg" alt="PICTURE4"></span>
                    <span><img src="assets/images/Gallery/5.jpg" alt="PICTURE5"></span>
                    <span><img src="assets/images/Gallery/6.jpg" alt="PICTURE6"></span>
                </div>
            </div>
            <img src="assets/images/Gallery/Forward.png" id="nextBtn">
        </div>
        <div class="gallery-button hidden">
            <form action="./pages/gallery.php">
                <button>See More</button>
            </form>
        </div>

        <div class="footer">
            <div class="footer-content">
                <div class="details">
                <h1 align="center">RVM Private Resort<h1><br>
                <h3>Sabitan St. Sto Rosario. Malolos Bulacan</h3><br>
                <h3>0991-448-3484</h3><br>
                <h3>RVM Private Resort</h3>
                </div>
            </div>  
            <img class="pichomepage" src="assets/images/footer.jpg" alt="FooterPic">
        </div>
</body>
</html>
