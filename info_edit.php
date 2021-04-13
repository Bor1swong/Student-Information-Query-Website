<?php
include('connect.php');
$uid = $_SESSION['uid'];
$content=$_POST['content'];
$sql="update user set content='$content' where id = '$uid'";
$result = $mysqli->query($sql); 
	//$num_insert = mysql_num_rows($res_insert);  
	//die();
	if($result)  
	{  
		
		echo "<script>alert('修改成功！'); history.go(-1); </script>";  
	}  
	else  
	{  
		echo "<script>alert('错误！'); history.go(-1);</script>";  
	} 