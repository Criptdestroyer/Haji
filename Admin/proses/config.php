<?php
// $server = "localhost";
// $user = "root";
// $password = "";
// $nama_database = "haji";

$db = mysqli_connect("haji.mysql.database.azure.com", "adminhaji@haji", "Pweb2019","haji");

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}