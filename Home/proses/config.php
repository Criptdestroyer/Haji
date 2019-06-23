<?php
$db=mysqli_init(); 
mysqli_real_connect($db, "hajiserver.mysql.database.azure.com", "alfath@hajiserver", "EmirG4nteng", "haji", 3306);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}