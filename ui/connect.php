<?php

DEFINE('DB_USER','root');
DEFINE('DB_PSWD','HistoryTV18');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','PANSecure');

$dbcon=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
}
?>
