<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "team2";
$limit = 10;
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
<?php
// Turn off all error reporting
error_reporting(0);
?>