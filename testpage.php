<?php
	if (isset($_GET["a"])) {
		if(($_GET['a']) == '1')
		{
		  echo "This is A";
		}
		else{
			echo "This is NOT A";
		}
	} else {
		echo "Không có dữ liệu trả về";
	}
?>