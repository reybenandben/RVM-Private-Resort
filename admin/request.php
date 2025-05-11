<?php
    require_once('database/connect.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"DELETE FROM `reservation` WHERE `reservation`.`id` = '$id'");
}


    $query ="Select * from reservation where status = 'Pending'";
    $result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>RVM ADMIN</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/Logo.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reserve.css">
    <script defer src="js/reserve.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(../assets/images/Logo.png)"></div>
                <h4>RVM</h4>
                <small>Private Resort</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="mailbox.php">
                            <span><img src="images/Mail.png" alt="Mail"></span>
                            <small>Mailbox</small>
                        </a>
                    </li>
                    <li>
                       <a href="request.php" class="active">
                            <span><img src="images/calendar.png" alt="request"></span>
                            <small>Reserve Request</small>
                        </a>
                    </li>
                    <li>
                       <a href="list.php">
                            <span><img src="images/list.png" alt="Reservation List"></span>
                            <small>Reserved List</small>
                        </a>
                    </li>
                    <li>
                       <a href="profile.php">
                            <span><img src="images/Profile.png" alt="Profile"></span>
                            <small>Account Setting</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                <div class="header-menu">
                    <div class="user">
                    <a target="_blank" href="../index.php"><div class="bg-img" style="background-image: url(../assets/images/Logo.png)"></div></a>
                        <form action="../login.php">
                            <button>Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>  
        
        
        <main>
            
            <div class="page-header">
                <h1>Reserved List</h1>
                <small>Home / Reserved List</small>
            </div>
            
            <div class="page-content">
            
            <div class="records table-responsive">

                <div class="record-header">
                    <div class="add">
                        <button id="addRecordBtn">Add record</button>
                    </div>
                </div>

                <div>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><span class="las la-sort"></span> CLIENT</th>
                                <th><span class="las la-sort"></span> RESERVATION DATE</th>
                                <th><span class="las la-sort"></span> TYPE</th>
                                <th><span class="las la-sort"></span> PHONE NUMBER</th>
                                <th><span class="las la-sort"></span> STATUS</th>
                                <th><span class="las la-sort"></span> OPERATION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <?php

                                    while($row = mysqli_fetch_assoc($result)){

                                    
                                
                                ?>

                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['firstName']?></td>
                                <td><?php echo $row['reservationDate']?></td>
                                <td><?php echo $row['type']?></td>
                                <td><?php echo $row['phoneNumber']?></td>
                                <td><?php echo $row['status']?></td>
                                <td>
                                    <a href="#" class='btn view' data-id="<?php echo $row['id']?>" 
                                    data-firstName="<?php echo $row['firstName']?>" 
                                    data-lastName="<?php echo $row['lastName']?>" 
                                    data-phoneNumber="<?php echo $row['phoneNumber']?>" 
                                    data-email="<?php echo $row['email']?>" 
                                    data-type="<?php echo $row['type']?>" 
                                    data-reservationDate="<?php echo $row['reservationDate']?>" 
                                    data-additionals="<?php echo $row['additionals']?>" 
                                    data-status="<?php echo $row['status']?>">View</a>
                                    <a href="list.php?id=<?php echo $row['id']?>" class="btn delete">Delete</a>
                                </td>
                                </tr>

                                <?php
                                }
                                
                                ?>               
                        </tbody>
                    </table>
                </div>

                </div>
            
            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Reservation Details</h2>
                    <div id="reservationDetails"></div>
                </div>
            </div>
               
            <div id="addRecordModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Add Record</h2>
                    <form action="database/insert_reservation.php" method="post" id="addRecordForm">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstname" name="firstname" required><br>

                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" required><br>

                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" required><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br>

                        <label for="accommodationType">Accommodation Type:</label>
                        <select id="accommodation" name="accommodation">
                            <option value="day_time">DAY TIME (9AM - 5PM)</option>
                            <option value="night_time">NIGHT TIME (7PM - 6AM)</option>
                            <option value="22hrs">22HRS (8AM - 6AM)</option>
                        </select><br>

                        <label for="reservationDate">Reservation Date:</label>
                        
                        <input type="date" id="reservation_date" name="reservation_date" required><br>

                        <fieldset>
                            <legend>Additionals (checkbox):</legend>
                            <label><input type="checkbox" name="additionals" value="videoke"> Videoke / Sound System (P600)</label><br>
                            <label><input type="checkbox" name="additionals" value="gas_stove"> Gas Stove (P500)</label><br>
                            <label><input type="checkbox" name="additionals" value="room_a"> Room A (P2,000)</label><br>
                            <label><input type="checkbox" name="additionals" value="room_b"> Room B (P2,000)</label><br>
                            <label>Fan Villa</label><br>
                            <label><input type="checkbox" name="additionals" value="8hrs"> 8hrs (P1,000)</label><br>
                            <label><input type="checkbox" name="additionals" value="22hrs"> 22hrs (P1,500)</label><br>
                            <label><input type="checkbox" name="additionals" value="mattress"> Full double mattress and pillows - P300</label><br>
                        </fieldset><br>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Reservation Details</h2>
                    <button type="submit">Submit</button>
                    <div id="reservationDetails"></div>
                </div>
        </main>
        
    </div>
</body>
</html>