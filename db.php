<?php
    $con = new mysqli("localhost","root","","college");
    if(mysqli_connect_error()){
        die("Database Connection Failed");
    }
?>