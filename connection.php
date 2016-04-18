<?php
$servername = "localhost";
$username = "root";
$password = "tkn21560";
$dbname="project";
// Create connection
$conn = mysql_connect($servername, $username, $password);
$dblink=mysql_select_db($dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else 
echo "Connected successfully";

if ($dblink) {
    echo " selected";
}
else 
echo "select na hua";


?>
