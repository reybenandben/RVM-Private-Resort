<?php
    require_once('database/connect.php');


    $query = "SELECT * FROM adminaccount"; 
    $result = mysqli_query($conn, $query);
    $profile = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>RVM ADMIN</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/Logo.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/setting.css">
    <script defer src="js/admin.js"></script>
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
                       <a href="request.php">
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
                       <a href="profile.php"  class="active">
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
                <h1>Account Settings</h1>
                <small>Home / Account Settings</small>
            </div>

            <div class="page-content">
            <div class="container">

            <div class="probasic">
                <div id="profile-picture">
                    <h2>Profile Picture</h2>
                    <img src="../assets/images/Logo.png" alt="Profile Picture">
                    <input type="file" id="file-input" accept="image/*">
                    <label for="file-input">Upload New Picture</label>
                </div>   

                <!-- Basic Information -->
                <div class="section"><br><br>
                    <h2>Basic Information</h2>
                    <p><b>Resort Name:</b> <br><?php echo $profile['name']; ?></p>
                    <p><b>Contact Number:</b> <br><?php echo $profile['contact']; ?></p>
                    <p><b>Physical Address:</b> <br><?php echo $profile['address']; ?></p>
                    <p><b>Website URL:</b> <br><a href="<?php echo $profile['website_url']; ?>"><?php echo $profile['website_url']; ?></a></p>
                </div>
            </div><br><br>

            <!-- User Management -->
            <div class="section">
                <h2>User Management</h2>
                <p><b>Username:</b>  RVM2286</p>
                <form action="database/changepassword.php" method="post">
                <div class="form-group">
                    <label for="current-password">Current Password</label>
                    <input type="password" id="current-password" name="current-password" placeholder="Current Password" required>
                </div>
                <div class="form-group">
                    <label for="new-password">New Password</label>
                    <input type="password" id="new-password" name="new-password" placeholder="New Password" requireed>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm New Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                </div>
                <input type="submit" value="changepassword">
                </form>
                
            </div>

            </div>
            
        </main>
        
    </div>
</body>
</html>