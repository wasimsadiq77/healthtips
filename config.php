<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'den1.mysql6.gear.host');
define('DB_USERNAME', 'cbhms');
define('DB_PASSWORD', 'Ro3a~FYS!PS5');
define('DB_NAME', 'cbhms');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>