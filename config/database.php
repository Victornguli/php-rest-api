<?php

$servername = "localhost";
$username = "victor";
$password = "Victor4325";
$database = "api_db";

//Establish database connection
$conn = mysqli_connect($servername, $username, $password);

if (!conn){
    die("Connection failed : " . mysqli_connect_error());
}

?>