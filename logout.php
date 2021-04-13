<?php
if(!isset($_SESSION)){session_start();}
//注销登录
    unset($_SESSION['name']);
	unset($_SESSION['uid']);
	unset($_SESSION['status']);
	//echo "<script>alert('注销登录成功！');</script>";
	header("Location: index.php"); 
    exit;
?>