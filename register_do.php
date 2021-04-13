<?php
    header("Content-Type: text/html; charset=utf-8");  
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")
    {

		if(in_array('', $_POST))
        {
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
			die();
        }
        else
        {
        //var_dump($_POST);
        //die();
			
			include_once("connect.php");  
			include("fileupload.class.php"); 
			date_default_timezone_set("Asia/Shanghai");  
			
			$username=$_POST['username'];
			$password = $_POST["password"];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$status=$_POST['status'];
			$sql = "select username from user where username = '$_POST[username]'"; //SQL语句  
			$result = $mysqli->query($sql);    //执行SQL语句  
			$num = $result->num_rows; //统计执行结果影响的行数  
			if($num)    //如果已经存在该用户  
			{  
				echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
			}  
			else    //不存在当前注册用户名称  
			{
				$up = new fileupload();  
				//设置属性（上传的位置、大小、类型、设置文件名是否要随机生成）  
				$up->set("path","./uploads");  
				$up->set("maxsize",50000000); //kb  
				$up->set("allowtype",array("gif","png","jpg","jpeg"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
				
				$up->set("israndname",true);//true:由系统命名；false：保留原文件名  
				  
				//使用对象中的upload方法，上传文件，方法需要传一个上传表单的名字name：pic  
				//如果成功返回true，失败返回false  
			  
				if($up->upload("pic")){
					//echo '<pre>';  
					//获取上传成功后文件名字  
					/*
					var_dump($up->getFileName()); 
					echo '</pre>'; 
					*/
					$file=$up->getFileName();
					//var_dump($image);
					//$image[0];
					
						//$image=$image[0]; 
					  
					
					//var_dump($image);
					//$image[0];
					$image=$file[0];
					$sql = "insert into user (username,password,name,email,phone,image,status) 
						values('$username','$password','$name','$email','$phone','$image','$status')";  
				//die;
					$result = $mysqli->query($sql); 
					//$num_insert = mysql_num_rows($res_insert);  
					if($result)  
					{  
						
					
							echo "<script>alert('注册成功！'); window.location.href='index.php'</script>";  
				 
						
					}  
					else  
					{
					//	echo 'no';  
					//die();
						echo "<script>alert('错误！'); history.go(-1);</script>";  
					}
				}
				else
				{  
				echo '<pre>';  
				//获取上传失败后的错误提示  
				var_dump($up->getErrorMsg());
				 
				}
			}  
			    
		}   
         
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>  