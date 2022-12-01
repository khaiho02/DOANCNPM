<?php
	include("../../../core/connect.php");
	$sql = "SELECT COUNT(*) FROM nhanvien ";
	$resuft = mysqli_query($conn,$sql);
	
	while ($row = mysqli_fetch_array($resuft)) {
		$sotieptheo = $row['COUNT(*)'];
		}
		$manvtieptheo = "Manager0".$sotieptheo;	
		$arr = [
				'idnvsp' => $manvtieptheo
			]; 
		//echo '<script>alert("abc")</script>';
		echo json_encode($arr);
		
?>