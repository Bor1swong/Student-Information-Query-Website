<ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="index.php">首页</a></li>
  <li role="presentation"><a href="class.php">我的课程</a></li>
  <li role="presentation"><a href="image.php">相册</a></li>
  <li role="presentation"><a href="mark.php">成绩</a></li>
  <?php
if (!session_id()) session_start();
if(!isset($_SESSION["name"])){
?>
  <li role="presentation"><a href="login.php">登录</a></li>
  <li role="presentation"><a href="register.php">注册</a></li>
  <?php

	}else{
?>

 <li role="presentation"><a href="#"><?php echo $_SESSION["name"];?></a></li>
  <li role="presentation"><a href="logout.php">退出</a></li>
<?php
	}
?>
</ul>