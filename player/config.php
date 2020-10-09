<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql303.epizy.com');
define('DB_USERNAME', 'epiz_26915793');
define('DB_PASSWORD', 'ivx7G2xjHouDG');
define('DB_NAME', 'epiz_26915793_musicplayer');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>