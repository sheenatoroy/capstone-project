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
    <link rel="stylesheet" href="/assets/css/admin_side/admin_dashboard.css">

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
          <li><a href="/modules/admin_side/admin_general_list.php">General List</a></li>
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
                    <h3>EXAM WEEK</h3>           
                        <p class="date-and-time">September 12, 2023 | 5:38 AM</p>              
                            <p class="announcement-description">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos obcaecati deserunt, tempore reiciendis harum commodi magnam, nisi perferendis doloremque ipsam sequi id, quibusdam voluptates voluptas non aliquid consequatur tempora laudantium!
                            </p> 
                </div>            
            </div>
        </div>
    </div>

<!--organizational content-->
<div class="organizational-content">
    <div class="col-auto">
    <i class='bx bx-sitemap'></i><span>Organizational Chart</span>
    </div>

  <!--organizational chart-->
  <div class="organizational-chart">
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
        <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"> </span>

                  <div class="card-image">
                      <img src="/assets/img/nuela.png" class="card-img">
                  </div>
            </div>

                <div class="card-content">
                    <h2 class="org-name">Nuela Rabino</h2>
                      <p class="org-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae eum assumenda, reiciendis enim voluptate. Neque saepe est ducimus autem, sed asperiores quae voluptas nisi fuga expedita. Earum, numquam? Eos!</p>
                </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"> </span>

                  <div class="card-image">
                      <img src="/assets/img/nuela.png" class="card-img">
                  </div>
            </div>

                <div class="card-content">
                    <h2 class="org-name">Nuela Rabino</h2>
                      <p class="org-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae eum assumenda, reiciendis enim voluptate. Neque saepe est ducimus autem, sed asperiores quae voluptas nisi fuga expedita. Earum, numquam? Eos!</p>
                </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"> </span>

                  <div class="card-image">
                      <img src="/assets/img/nuela.png" class="card-img">
                  </div>
            </div>

                <div class="card-content">
                    <h2 class="org-name">Nuela Rabino</h2>
                      <p class="org-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae eum assumenda, reiciendis enim voluptate. Neque saepe est ducimus autem, sed asperiores quae voluptas nisi fuga expedita. Earum, numquam? Eos!</p>
                </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"> </span>

                  <div class="card-image">
                      <img src="/assets/img/nuela.png" class="card-img">
                  </div>
            </div>

                <div class="card-content">
                    <h2 class="org-name">Nuela Rabino</h2>
                      <p class="org-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae eum assumenda, reiciendis enim voluptate. Neque saepe est ducimus autem, sed asperiores quae voluptas nisi fuga expedita. Earum, numquam? Eos!</p>
                </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"> </span>

                  <div class="card-image">
                      <img src="/assets/img/nuela.png" class="card-img">
                  </div>
            </div>

                <div class="card-content">
                    <h2 class="org-name">Nuela Rabino</h2>
                      <p class="org-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae eum assumenda, reiciendis enim voluptate. Neque saepe est ducimus autem, sed asperiores quae voluptas nisi fuga expedita. Earum, numquam? Eos!</p>
                </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"> </span>

                  <div class="card-image">
                      <img src="/assets/img/nuela.png" class="card-img">
                  </div>
            </div>

                <div class="card-content">
                    <h2 class="org-name">Nuela Rabino</h2>
                      <p class="org-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae eum assumenda, reiciendis enim voluptate. Neque saepe est ducimus autem, sed asperiores quae voluptas nisi fuga expedita. Earum, numquam? Eos!</p>
                </div>
          </div>
        </div>
      </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <br>
            <br>
            <div class="swiper-pagination" ></div>
    </div>
  </div>
   
        <button class="org-button">View More</button>
</div>

<!--events calendar-->
<div class="calendar-content">
    <div class="col-auto">
    <i class='bx bxs-calendar'></i><span>Events Calendar</span>
    </div>
</div>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="/save_schedule.php" method="POST" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
<?php 
$schedules = $conn->query("SELECT * FROM `event_calendar`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</section>
</body>

    <script> 
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>') 
    </script>
   <!-- Swiper JS -->
  <script src="/assets/js/swiper-bundle.min.js"> </script>
  <script src="/assets/js/script.js"> </script>
  
</html>


 