<?php 
require_once('/php-xampp/htdocs/RELEASE_SYSTEM/database_connection.php');
if(!isset($_GET['id'])){
    echo "<script> alert('Undefined Schedule ID.'); location.replace('/modules/admin_side/admin_dashboard.php') </script>";
    $conn->close();
    exit;
}

$delete = $conn->query("DELETE FROM `event_calendar` where id = '{$_GET['id']}'");
if($delete){
    echo "<script> alert('Event has deleted successfully.'); location.replace('/modules/admin_side/admin_dashboard.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();

?>