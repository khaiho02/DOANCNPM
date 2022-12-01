<?php
	include("../../../core/connect.php");
	$id = $_GET['id'];
	$sql = "SELECT * FROM sanpham WHERE idSP = '$id'";
	$resuft = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($resuft)) {
		$arr = [
			'idsp' => $row['idSP'],
			'ten' => $row['tensp'],
			'loai' => $row['idLSP'],
			'gia' => $row['gia'],
			'mota' => $row['mota'],
		]; 
		echo json_encode($arr);
		//echo '<input type="file" name="hinhanhs" id="files" onchange="return fileValidations()" value = "'.$row['hinhanh'].'">';
	}
?>