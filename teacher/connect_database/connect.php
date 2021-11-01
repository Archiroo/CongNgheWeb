<?php
    session_start();
    define('SITEURL', 'http://localhost/CongNgheWeb/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'db_cuoiki');

    $con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($con)
    {
        mysqli_query($con, "SET NAMES 'UTF8'");
    }
    else
    {
        echo "Kết nối thất bại";
    }
?>