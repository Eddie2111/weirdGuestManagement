<?php

# database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "hostel";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    echo "Check dbconnect.php";
}


?>