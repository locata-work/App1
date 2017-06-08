<?php
$server_username = "locata_username"; // điền username đăng nhập mysql
$server_password = "nguyentuananh0501"; // điền password đăng nhập mysql
$server_host = "64.62.211.131";// điền tện host
$database = "locata_database"; // tên database
$port = "3360";
// tạo biến kết nối tới database
$conn = mysqli_connect($server_host,$server_username,$server_password,$database,$port) or die("không thể kết nối tới database");
?>
