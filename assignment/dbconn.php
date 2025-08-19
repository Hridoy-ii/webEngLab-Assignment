<?php
$lh = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bookdb";

$conn = new mysqli($lh, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: ");
} 
else {
    echo "Connected successfully";
}
?>