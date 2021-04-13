<?php
if (!session_id()) session_start();
if(!isset($_SESSION["name"]))
{
	$sql="select id from user where status='1'";
	$result = $mysqli->query($sql);
	$admin_count = $result->num_rows;
	$sql="select id from user where status='0'";
	$result = $mysqli->query($sql);
	$user_count = $result->num_rows;
?>
<ul class="list-group">
    <li class="list-group-item">管理者人数(<?php echo $admin_count; ?>)</li>
    <li class="list-group-item">普通用户人数(<?php echo $user_count;?>)</li>
    
</ul>
<?php
}
else
{
$uid=$_SESSION['uid'];
$sql ="SELECT * FROM  user where id ='$uid'";  	
$result = $mysqli->query($sql);

if($result->num_rows > 0){
$row = $result->fetch_assoc();
?>
<div class="left-box">
	<img src="uploads/<?php echo $row['image'];?>" class="img-responsive center-block" />
	<form class="form-horizontal"  action="info_edit.php" method="post">
	<div class="list-group">
		
		<a href="#" class="list-group-item">姓名：<?php echo $row['name'];?></a>
		<a href="#" class="list-group-item">邮箱：<?php echo $row['email'];?></a>
		<a href="#" class="list-group-item">电话：<?php echo $row['phone'];?></a>
		<a href="#" class="list-group-item">自我介绍：<textarea name="content" class="form-control" rows="3"><?php echo $row['content']?></textarea></a>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" name="Submit"  class="btn btn-primary">修改自我介绍</button>
		  
		</div>
	</div>
	</form>
</div>
<?php
}
}
?>