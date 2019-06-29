<?php
$db=mysqli_init();
mysqli_ssl_set($db, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($db, "haji.mysql.database.azure.com", "adminhaji@haji", "Pweb2019", "haji", 3306);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}