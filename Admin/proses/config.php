<?php
$db=mysqli_init(); 
mysqli_real_connect($db, "hajiserver.mysql.database.azure.com", "alfath@hajiserver", "EmirG4nteng", "haji", 3306);
if (mysqli_connect_errno($db)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}