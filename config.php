<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql6.freemysqlhosting.net');
define('DB_USERNAME', 'sql6450823');
define('DB_PASSWORD', 'bq5uI3Pkbc');
define('DB_NAME', 'sql6450823');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>