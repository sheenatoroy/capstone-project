<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCS: E-LOG | Login </title>

    <!--Website Logo-->
    <link rel="icon" href="./assets/img/ccs-logo.png">

    <!--Icon link-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 
    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    <!--CSS link-->
    <link rel="stylesheet" href="/assets/css/login_page.css">

</head>
<body>
    
<?php

//database connection
include ('../RELEASE_SYSTEM/database_connection.php');

$username = $password = " ";
$error_message = " ";

//process form data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Basic form validation
    if (empty($username) || empty($password)) {

      echo '<script>alert($error_message = "Please fill out the fields!")</script>';
    
    } else {
        // Query to fetch user data based on username
        $query = "SELECT * FROM user_accounts WHERE username = '".$username."' AND password = '".$password."'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);

        if($row["account_type"] == "student"){

            $url = '/modules/student_side/minor_dashboard.php';
            header('Location: ' . $url);

        } elseif($row["account_type"] == "admin") {

            $url = '/modules/admin_side/admin_dashboard.php';
            header('Location: ' . $url);

        } elseif($row["account_type"] == "faculty") {

            $url = '/modules/faculty_side/major_dashboard.php';
            header('Location: ' . $url);
          
        }else {

          echo "Username or Password is Incorrect";

        }
    }
}
 
?>
<div class="header-container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card my-2 border-0">
                <form class="card-body cardbody-color p-lg-3">
                    <!--start of division-->
                    <div class="text-center">

                    <!--logo header-->
                    <img src="./assets/img/ccs-logo.png" class="img-fluid logo-image-pic img-thumbnail rounded-circle my-2 border-0" width="250px" alt="logo">
                    
                        <!--title and subtitle-->
                        <div class="card-title">
                            <h1> CCS:ELOG </h1>
                            <p>Electronic Logbook for College of Computing Studies</p>
                        </div>
                    </div>
                    <!--end of division-->
                </form>

                    <!--login input form-->
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                        <!--employee number input-->
                        <div class="input-group mb-3">
                            <div class="input-group-text"><i class='bx bxs-user'></i></div>
                            <input type="text" name="username" class="form-control" placeholder="Enter your username">
                            <span class="error"></span>
                        </div>

                        <!--password input-->
                        <div class="input-group mb-3">
                            <div class="input-group-text"><i class='bx bx-key'></i></div>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            <span class="error"></span>
                            </div>

                        <div class="forgot-password">
                        <a href="">Forgot password?</a>
                        </div>

                        <!--submit button-->
                        <div class="col-md-12 text-center">
                            <input class="btn justify-content-center" type="submit" value="Submit">
                        </div>
                </form>
                
                    <?php echo $error_message; ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
