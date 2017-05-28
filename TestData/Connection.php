<?php
	$server_username = "locata"; // điền username đăng nhập mysql
	$server_password = "locatapass"; // điền password đăng nhập mysql
	$server_host = "localhost";// điền tện host
	$database = 'test'; // tên database
	 
	// tạo biến kết nối tới database
	$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
?>
