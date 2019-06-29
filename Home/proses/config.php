<?php
$server = "hajimabrur-mysqldbserver.mysql.database.azure.com";
$user = "mysqldbuser@hajimabrur-mysqldbserver";
$password = "Pweb2019";
$nama_database = "haji";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}