<?php
    session_start();
    $server = "localhost";
    $username="webuser";
    $password="passwd1nf4ntes2@23";
    $dbname="webdata";

    $conn = new mysqli($server,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }
?>