<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCS: E-LOG | Home </title>

    <!--Website Logo-->
    <link rel="icon" href="/assets/img/ccs-logo.png">

    <!--Icon link-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 
   
    <!--CSS link-->
    <link rel="stylesheet" href="/assets/css/admin_side/admin_dashboard.css">

</head>
<body>
<?php

    include('/php-xampp/htdocs/RELEASE_SYSTEM/database_connection.php');

    $sel = "SELECT * FROM user_accounts";
    $query = mysqli_query($connections, $sel);
    $result = mysqli_fetch_assoc($query);

?>
<!--header-->
<div class="sidebar close">
    <div class="logo-details">
        <img src="/assets/img/ccs-logo.png" class="img-fluid logo-image-pic img-thumbnail rounded-circle my-2 border-0" width="100px" alt="logo">
        <span class="logo_name">CCS: E-LOG</span>  
    </div>

    <div class="description-details">
        <p>Electronic Logbook for College of Computing Studies</p>
    </div>
   

    <!--displaying username-->
    <div class="display-username">
              <?php

                    echo "<h3>Welcome, " . 
                    
                    $result['first_name'] . "!</h3>"  . 
                    
                            "<p>Employee Id. " . 
                    
                    $result['id_number'] . "</p>";
              ?>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
            <i class='bx bx-home-alt'></i>
            <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
            <a href="#">
                <i class='bx bx-calendar'></i>
                <span class="link_name">Appointments</span>
            </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Appointments</a></li>
          <li><a href="#">General List</a></li>
          <li><a href="#">Appointments List</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
            <i class='bx bx-volume-full' ></i>
            <span class="link_name">Announcement</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Announcement</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
            <i class='bx bx-chat'></i>
            <span class="link_name">Feedbacks</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Feedbacks</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
            <i class='bx bx-user-circle'></i>
            <span class="link_name">Account Management</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Account Management</a></li>
        </ul>
      </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text"></span>
    </div>
 

<!--dashboard content-->
<div class="dashboard-content">
    <h1>CCS: ELOG</h1>
        <p>Electronic Logbook for College of Computing Studies</p>
</div>

<!--announcement content-->
<div class="announcement-content">
    <div class="col-auto">
        <i class='bx bxs-megaphone'></i><span>Announcement</span>
    </div>
</div>

    <!--announcement-page-->
    <div id="container-mb">
        <div class="announcement-card" >
            <div class="announcement-card-body">
                <div class="announcement-title">
                    <h2>Title</h2>           
                        <h3>Date and Time</h3>              
                            <p class="announcement-description">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos obcaecati deserunt, tempore reiciendis harum commodi magnam, nisi perferendis doloremque ipsam sequi id, quibusdam voluptates voluptas non aliquid consequatur tempora laudantium!
                            </p> 
                </div>            
            </div>
        </div>
    </div>

<!--organizational chart-->
<div class="organizational-content">
    <div class="col-auto">
    <i class='bx bx-sitemap'></i><span>Organizational Chart</span>
    </div>
</div>
</section>
</body>
</html>
<script src="/assets/js/script.js"></script>