<?php
date_default_timezone_set('Asia/Jakarta');

$host="localhost";
$user="root";
$pass="";
$dbname="kuizy";

$conn = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
