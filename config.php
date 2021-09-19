<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql3.freemysqlhosting.net');
define('DB_USERNAME', 'sql3438124');
define('DB_PASSWORD', 'zf42J2UgvB');
define('DB_NAME', 'sql3438124');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
    echo "-----";
}
?>