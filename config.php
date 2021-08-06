<?php
session_start();
$dbHost = 'localhost'; //server name
$dbName = 'codeaza'; // database name
$dbUsername = 'root'; //user name
$dbPassword = ''; //pass
// create db connection
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 

//checking for db connection

if(mysqli_connect_errno()){
    echo "Failed to connect :(";
    exit();
}
echo "Connection sucessful! :)";
?>