<?php
	include("../../../core/connect.php");
	session_start(); 
	$id = $_SESSION['user']['iduser'];
	$password   = $_POST['pass'];
    $password = md5($password);
    $sql = "SELECT * FROM user where idUser = '$id'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($run);
        if($password != $row['matkhau']){
            echo '<script> document.getElementById("lois").innerHTML ="Mật khẩu không khớp !!!" 
                document.getElementById("loi").innerHTML =""
                </script>';
        } 
        echo '
			<script> document.getElementById("lois").innerHTML ="";
           </script>
        ';
 ?>