<?php
//server with default setting (user 'root' with no password)
// $host = 'localhost';  // server 
// $user = 'root';   
// $pass = "";   
// $database = 'database_madaloalo';   //Database Name  

// establishing connection
  $conn = mysqli_connect('localhost','root',"",'database_madaloalo');   

 // for displaying an error msg in case the connection is not established
  if (!$conn) {                                             
     die("Connection failed: " . mysqli_connect_error());     
  }else{
    echo "<script type='text/javascript'>console.log('connected!')</script>";
  }
?>

