<?php
$server = "hajiserver.mysql.database.azure.com";
$user = "alfath@hajiserver";
$password = "EmirG4nteng";
$nama_database = "haji";
$db=mysqli_init(); 
mysqli_ssl_set($db, NULL, NULL, '/var/www/html/BaltimoreCyberTrustRoot.crt.pem', NULL, NULL);
mysqli_real_connect($db, "hajiserver.mysql.database.azure.com", "alfath@hajiserver", $password, $nama_database, 3306);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}