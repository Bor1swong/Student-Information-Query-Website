<?php
include("session.php");
include('connect.php');
if(in_array('', $_POST))
{
	echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
	die();
}
else
{
	$title=$_POST['title'];
	$content=$_POST['content'];
	$sql="insert into class (title,content) values('$title','$content')";
	$result = $mysqli->query($sql);
	if($result)  
	{  	
		echo "<script>alert('添加成功！'); window.location.href='class.php'</script>";  	
	}  
	else  
	{

		echo "<script>alert('错误！'); history.go(-1);</script>";  
	}
}