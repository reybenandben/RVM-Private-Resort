<?php

    require_once('database/connect.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delete=mysqli_query($conn,"DELETE FROM `messages` WHERE `messages`.`id` = '$id'");
    }

    $query ="Select * from messages";
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
    <link rel="stylesheet" href="css/mailbox.css">
    <script defer src="js/admin.js"></script>
    <script defer src="js/mailbox.js"></script>
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
                       <a href="mailbox.php" class="active">
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
                <h1>MailBox</h1>
                <small>Home / MailBox</small>
            </div>
            
            <div class="page-content">
            <div class="records table-responsive">
            <table width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><span class="las la-sort"></span> CLIENT</th>
                                    <th><span class="las la-sort"></span> ISSUED DATE</th>
                                    <th><span class="las la-sort"></span> PHONE NUMBER</th>
                                    <th><span class="las la-sort"></span> OPERATION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php

                                    while($row = mysqli_fetch_assoc($result)){

                                    
                                
                                ?>

                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['date']?></td>
                                <td><?php echo $row['phoneNumber']?></td>
                                <td>
                                    <a href="#" class="btn view" data-id="<?php echo $row['id']; ?>"
                                       data-name="<?php echo $row['name']; ?>" data-date="<?php echo $row['date']; ?>"
                                       data-phone="<?php echo $row['phoneNumber']; ?>" data-email="<?php echo $row['email']; ?>"
                                       data-message="<?php echo htmlspecialchars($row['message']); ?>">View</a>
                                    <a href="mailbox.php?id=<?php echo $row['id']; ?>" class="btn delete">Delete</a>
                                </td>
                                </tr>

                                <?php
                                }
                                
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
            </div>
        </main>       
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Client Details</h2>
            <p id="modal-id"></p>
            <p id="modal-name"></p>
            <p id="modal-date"></p>
            <p id="modal-phone"></p>
            <p id="modal-email"></p>
            <p id="modal-message"></p>
        </div>
    </div>
</body>
</html>