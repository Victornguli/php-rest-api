<?php

$host = "localhost";
$username = "victor";
$password = "Victor4325";
$database = "api_db";

//Establish database connection
$conn = mysqli_connect($host, $username, $password, $database);

if (!conn){
    die("Connection failed : " . mysqli_connect_error());
}

?>