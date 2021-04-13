<?php
	include_once("connect.php");  
	$_SESSION["status"] = null;
	
		$username=$_POST['username'];
		$password=$_POST['password'];
		$status=$_POST['status'];
		$sql="select * from user where username = '$username' and password = '$password' and status = '$status'";
		//die();
		$result = $mysqli->query($sql);
		$num = $result->num_rows;
			if($num)  
            {  
                $row = $result->fetch_assoc();  //将数据以索引方式储存在数组中 
				
				
					$_SESSION["status"] = $row['status'];
					$_SESSION["name"] = $row['name'];
					$_SESSION["uid"] = $row['id'];
					header("Location: index.php"); 
				
            }  
            else  
            {  
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
            } 
	
?>