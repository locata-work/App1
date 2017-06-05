<?php
$server_username = "b9_20194776"; // điền username đăng nhập mysql
$server_password = "nguyentuananh0501"; // điền password đăng nhập mysql
$server_host = "sql211.byethost9.com";// điền tện host
$database = "b9_20194776_locata"; // tên database
$port = "3360";
// tạo biến kết nối tới database
$conn = mysqli_connect($server_host,$server_username,$server_password,$database,$port) or die("không thể kết nối tới database");
?>
