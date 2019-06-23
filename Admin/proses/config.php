<?php
$server = "tcp:hajiserver.database.windows.net";
$user = "alfath";
$password = "EmirG4nteng";
$nama_database = "haji";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
