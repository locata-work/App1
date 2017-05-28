<?php
	if (isset($_GET["a"])) {
		if($_GET['a']) == '1')
		{
		  echo <h1>This is A</h1>
		}
		else{
			echo <h1>This is NOT A</h1>
		}
		
	} else {
		echo "Không có dữ liệu trả về";
	}
?>