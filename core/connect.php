<?php 
	$conn = mysqli_connect("localhost","root","","shopbandienthoai") or die("Kết nối thất bại");
	mysqli_set_charset($conn, 'UTF8');
	
	function chuyendoi($sotien){
		$x = number_format($sotien,0,',','.');
		return $x;
	}
	// function truyxuatSQL($result){
	// 	$run = mysqli_query($conn,$result);
	// 	return $run;
	// }
 ?>