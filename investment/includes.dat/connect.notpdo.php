<?php

$servername = "localhost";
$username = "root";
$password = "767990";
$dbname = "website";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 