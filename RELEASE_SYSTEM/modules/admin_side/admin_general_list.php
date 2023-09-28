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
 
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   
    <!--CSS link-->
    <link rel="stylesheet" href="/assets/css/admin_side/admin_general_list.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">

    <!--Calendar CCS-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fullcalendar/lib/main.min.css">
    <script src="/assets/js/jquery-3.6.0.min.js"> </script>
    <script src="/assets/js/bootstrap.min.js"> </script>
    <script src="/fullcalendar/lib/main.min.js"> </script>

    <!--Font Awesome Script-->
    <script src="https://kit.fontawesome.com/e8252a8543.js" crossorigin="anonymous"></script>

    
    
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
        <img src="/assets/img/ccs-logo.png"  width="100px" alt="logo">
        <span class="logo_name">CCS: E-LOG</span>  
    </div>

    <div class="description-details">
        <p>Electronic Logbook for College of Computing Studies</p>
    </div>
   

    <!--displaying username-->
    <div class="display-username">
              <?php

                    echo "<h4>Welcome, " . 
                    
                    $result['first_name'] . "!</h4>"  . 
                    
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
            <li><a class="link_name" href="admin_dashboard.php">Home</a></li>
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

<!--general list-->
<div class="table-content">
    <div class="col-auto">
    <i class='bx bx-table'></i><span>Appointments and Transaction</span>
    </div>
</div>

<!--general list content-->
<div class="table">
  <div class="table header">
    <div>
      <input placeholder="search">
     
    </div>
  </div>
</div>


</section>
</body>


  <script src="/assets/js/script.js"> </script>
  
</html>


 