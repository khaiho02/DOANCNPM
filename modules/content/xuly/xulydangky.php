<?php 
	include("../../../core/connect.php");
		$username = $_POST['user'];
		$sql = "SELECT * FROM user where tendangnhap = '$username'";
		$run = mysqli_query($conn,$sql);
		if(mysqli_num_rows($run)>0){
			echo '<p  id="loiuser" style="color:red"></br>Tên đăng nhập đã bị trùng mời nhập lại!!!</p>';
		}
 ?>