
<?php
    $server = "127.0.0.1:3308";
    $username = "root";
    $pass = "password";
    $db = "ayiti_students";

    $conn = mysqli_connect($server,$username,$pass,$db);
     if(!$conn){
        die("Databased is not connected.Error:".mysqli_connect_error());
     }
     

     
?>