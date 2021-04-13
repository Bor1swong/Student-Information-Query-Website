<?php
// 启动 Session
session_start();
// 声明一个名为 admin 的变量，并赋空值。
	if(!isset($_SESSION["status"]) || $_SESSION["status"]!=1){
		//echo "1";
	echo "<script>alert('请先登录！'); window.location.href='index.php'</script>";
		
	die();
	}
?> 