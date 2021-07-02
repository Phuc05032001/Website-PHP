<?php 
$ketnoi['host'] = 'ec2-3-89-0-52.compute-1.amazonaws.com'; 
$ketnoi['dbname'] = 'db9hkvijdr9s3u'; // Tên database 
$ketnoi['username'] = 'bvcwhbolmmlqkv'; // Tên user mặc định là root 
$ketnoi['password'] = '7272ea7911bf542f581475587a901e481daec8c89125edea4704333ee90bc13a'; // Password để trống 
$ketnoi['uri'] = 'postgres://bvcwhbolmmlqkv:7272ea7911bf542f581475587a901e481daec8c89125edea4704333ee90bc13a@ec2-3-89-0-52.compute-1.amazonaws.com:5432/db9hkvijdr9s3u';
$con = pg_connect( /*"{$ketnoi['host']}", "{$ketnoi['username']}", "{$ketnoi['password']}", "{$ketnoi['dbname']}",*/ "{$ketnoi['uri']}");
   
    if (!$con) {
        echo "An error occurred.\n";
        exit;
    }
    // Query data
    $result = pg_query($con, 'SELECT * FROM accounts');
    if (!$result) {
        echo "An error occurred.\n";
        exit;
    }
    // Show value
    // while ($row = pg_fetch_assoc($result)) {
    //     var_dump($row);
    // }
?>