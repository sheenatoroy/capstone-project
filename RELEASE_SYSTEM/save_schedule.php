<?php 
require_once('/php-xampp/htdocs/RELEASE_SYSTEM/database_connection.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('/modules/admin_side/admin_dashboard.php') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `event_calendar` (`title`,`description`,`start_datetime`,`end_datetime`) VALUES ('$title','$description','$start_datetime','$end_datetime')";
}else{
    $sql = "UPDATE `event_calendar` set `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `id` = '{$id}'";
}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('/modules/admin_side/admin_dashboard.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?> 