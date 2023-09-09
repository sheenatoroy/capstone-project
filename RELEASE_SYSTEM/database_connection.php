<?php

$hostname = "localhost";
$username = "root";
$password = "";  
$database = "db_elogsystem";   
$conn = mysqli_connect($hostname,$username,$password,$database);    

$connections = mysqli_connect("127.0.0.1","root","", "db_elogsystem");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " .mysqli_connect_errno(); 
  } else{

        
  }
?>