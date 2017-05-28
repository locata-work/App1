<?php
$server_username = "sql12176978"; // điền username đăng nhập mysql
$server_password = "a8daTQXWTX"; // điền password đăng nhập mysql
$server_host = "sql12.freemysqlhosting.net"; // điền tện host
$database = 'sql12176978'; // tên database
$server_port = '3306';

// tạo biến kết nối tới database
$conn = mysqli_connect($server_host, $server_username, $server_password, $database,$server_port) or die("không thể kết nối tới database");
?>