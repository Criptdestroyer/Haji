<?php
// $server = "fdb26.awardspace.net";
// $user = "3085597_haji";
// $password = "adminhaji8";
// $nama_database = "3085597_haji";
$db=mysqli_init(); 
mysqli_real_connect($db, "haji.mysql.database.azure.com", "adminhaji@haji", "Pweb2019","haji", 3306);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}