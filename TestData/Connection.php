<?php
	$server_username = "zwtnvsurqaeert"; // điền username đăng nhập mysql
	$server_password = "217caf7cd5e18385e7f726dfd589110414148d0400c429fc43123926465f23d6"; // điền password đăng nhập mysql
	$server_host = "ec2-54-243-253-17.compute-1.amazonaws.com";// điền tện host
	$database = 'd58vrl17ts5u5q'; // tên database
	$server_port = '5432';
	 
	// tạo biến kết nối tới database
	//$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
//	$conn =
//	$dbopts = parse_url(getenv('DATABASE_URL'));
//	$app->register(new Herrera\Pdo\PdoServiceProvider(),
//               array(
//                   'pdo.dsn' => 'pgsql:dbname=d58vrl17ts5u5q'.ltrim($dbopts["postgres://zwtnvsurqaeert:217caf7cd5e18385e7f726dfd589110414148d0400c429fc43123926465f23d6@ec2-54-243-253-17.compute-1.amazonaws.com:5432/d58vrl17ts5u5q"],'/').';host='.$dbopts["ec2-54-243-253-17.compute-1.amazonaws.com"] . ';port=5432' . $dbopts["5432"],
//                   'pdo.username' => $dbopts["zwtnvsurqaeert"],
//                   'pdo.password' => $dbopts["217caf7cd5e18385e7f726dfd589110414148d0400c429fc43123926465f23d6"]
//               )
//	);

    //$conn = pg_connect("host=ec2-54-243-253-17.compute-1.amazonaws.com dbname=d58vrl17ts5u5q user=zwtnvsurqaeert password=217caf7cd5e18385e7f726dfd589110414148d0400c429fc43123926465f23d6") or die("không thể kết nối tới database");

    $myPDO = new PDO('pgsql:host=ec2-54-243-253-17.compute-1.amazonaws.com;dbname=d58vrl17ts5u5q', 'zwtnvsurqaeert', '217caf7cd5e18385e7f726dfd589110414148d0400c429fc43123926465f23d6');

?>
