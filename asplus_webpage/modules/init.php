<?php
$servername = "localhost";
$username = "root";
$password = "";
$baza = "asplus";

// Create connection
$db = new mysqli($servername, $username, $password, $baza);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_set_charset($db,"utf8");
?>