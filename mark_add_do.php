<?php  
include("session.php");
include("connect.php");
header("Content-type:text/html;charset=utf-8");  
date_default_timezone_set("Asia/Shanghai");  
include("fileupload.class.php");  
	//var_dump($_POST);
	// die();
	$uid=$_SESSION['uid'];
	//die();
    $up = new fileupload();  
    //设置属性（上传的位置、大小、类型、设置文件名是否要随机生成）  
    $up->set("path","./uploads");  
    $up->set("maxsize",50000000); //kb  
    $up->set("allowtype",array("txt"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
    
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
		$file=$file[0];
		$myfile = fopen("uploads/".$file, "r") or die("Unable to open file!");
		// 输出单行直到 end-of-file
		while(!feof($myfile)) {
		  $mark[] = fgets($myfile);
		}
		fclose($myfile);
		//$mark=mb_convert_encoding($mark, "UTF-8", "auto");  
		//var_dump($mark);
		$name=$mark[0];
		$name= iconv("gb2312", "utf-8", $name);  
		$class=$mark[1];
		$class= iconv("gb2312", "utf-8", $class);    
		$mark=$mark[2];
		
		$sql = "insert into mark (name,title,mark) values('$name','$class','$mark')";  
		//die();		
		$result = $mysqli->query($sql); 
			if($result){  
				
				echo "<script>alert('添加成功！');window.location.href='mark.php' </script>";  
			}else{  
				echo "<script>alert('错误！'); history.go(-1);</script>";
				//var_dump($up->getErrorMsg());		
			}  
         
    }else{  
        echo '<pre>';  
        //获取上传失败后的错误提示  
        var_dump($up->getErrorMsg());
        //$arr=$up->getErrorMsg();
        //$err=$arr[0];
        //echo "<script>alert('".$err."'); history.go(-1);</script>";
        //echo '</pre>';  
		 //echo "<script>history.go(-1);</script>";  
    }
	
?>  